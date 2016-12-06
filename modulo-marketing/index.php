<?php
    require 'functions/publicar.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Marketing</title>
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/material.min.js"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Material Design Lite  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> </head>

    <script>
        $(function(){
            
            $('#archivo-form').ajaxForm(function(){
                
                alert('Archivo cargado satisfactoriamente');
                
            });
            
        });
    </script>

<body>
    <!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
    <div class="mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--scroll">
            <div class="mdl-layout__header-row">
                <!-- Title --><span class="mdl-layout-title">Administrativo</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link dialog-button" id="public">Publicaciones Recientes</a> 
                    <a class="mdl-navigation__link dialog-button" id="agregar">Añadir Nuevo</a> 
                </nav>
            </div>
        </header> 
        
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header"> <img src="img/alfredo.jpg" class="demo-avatar">
                <div class="demo-avatar-dropdown"> <span>hello@example.com</span>
                    <div class="mdl-layout-spacer"></div>
                    <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"> <i class="material-icons" role="presentation">arrow_drop_down</i> <span class="visuallyhidden">Accounts</span> </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                        <li class="mdl-menu__item">hola@example.com</li>
                        <li class="mdl-menu__item">info@example.com</li>
                        <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                    </ul>
                </div>
            </header>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                <!-- Material Icons: https://material.io/icons/ --><a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Inicio</a> <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Buzón</a> <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Papelera</a>
                <div class="mdl-layout-spacer"></div> <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>Ayuda<span class="visuallyhidden">Help</span></a> </nav>
        </div>
    
        
         <!-- plantilla de elementos -->
        <!-- Contenido con 4 columnas debajo del Slider -->
        
<div class="android-card-container mdl-grid">
    
    <?php 
        $publicidades = publicidad(); // invocamos el método creado en publicar.php
    
        foreach($publicidades as $publicidad){ 
    ?>
    
    <!-- Columna 1 -->
    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
    <div class="mdl-card__media">
            <img src="img/<?=$publicidad->imagen?>" class="responsive-img">
            
          </div>
    <div class="mdl-card__supporting-text">
            <span class="mdl-typography--font-light mdl-typography--subhead"><?=$publicidad->nombre?></span>
          </div>
    <div class="mdl-card__actions">
            <button class="mdl-button mdl-js-button mdl-button--primary">Editar</button>
            <button class="mdl-button mdl-js-button mdl-button--primary">Publicar</button>
            <button class="mdl-button mdl-js-button mdl-button--primary">Eliminar</button>
            </a>
          </div>
        </div>
    
    <?php
        }
        
    ?>
    
        
        
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
            </div>
        </main>
        <dialog id="dialog" class="mdl-dialog">
            <h3 class="mdl-dialog__title">Publicaciones Recientes</h3>
            <div class="mdl-dialog__content">
                <ul class="demo-list-control mdl-list">
                    <li class="mdl-list__item">
                        <div class="content-grid mdl-grid">
                            <div class="mdl-cell mdl-cell--4-col"><span class="mdl-list__item-primary-content">
  <i class="material-icons  mdl-list__item-avatar">archive</i>
      Nombre del archivo
    </span></div>
                            <div class="mdl-cell mdl-cell--8-col">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="list-checkbox-1">
                                            <input type="checkbox" id="list-checkbox-1" class="mdl-checkbox__input" checked /> Deshabilitar</label>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="list-checkbox-1">
                                            <input type="checkbox" id="list-checkbox-1" class="mdl-checkbox__input" checked /> Modificar</label>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col">
                                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="list-checkbox-1">
                                            <input type="checkbox" id="list-checkbox-1" class="mdl-checkbox__input" checked /> Publicar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mdl-dialog__actions">
                <button type="button" class="mdl-button">Guardar</button>
                <button type="button" class="mdl-button" disabled>Disabled action</button>
            </div>
        </dialog>
        
        <dialog id="dialog1" class="mdl-dialog">
            <h3 class="mdl-dialog__title">Agregar Nuevo Archivo</h3>
            <div class="mdl-dialog__content">
              <div align="center"> 
                <form id="archivo-form" action="añadir.php" method=post enctype="multipart/form-data">
                    Ingrese aqui su archivo:<br>
                    <input type="file" name="archivo">
                    <input type="submit" value="Añadir" id="anadir">
                </form>
                
                </div>
            </div>
            <div class="mdl-dialog__actions">
                <button type="button" class="mdl-button">Cerrar</button>
            </div>
        </dialog>
    </div>
 
    <script>
        (function () {
            'use strict';
            var dialogButton = document.querySelector('#public');
            var dialog = document.querySelector('#dialog');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialogButton.addEventListener('click', function () {
                dialog.showModal();
            });
            dialog.querySelector('button:not([disabled])').addEventListener('click', function () {
                dialog.close();
            });
        }());
        
        (function () {
            'use strict';
            var dialogButton = document.querySelector('#agregar');
            var dialog = document.querySelector('#dialog1');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialogButton.addEventListener('click', function () {
                dialog.showModal();
            });
            dialog.querySelector('button:not([disabled])').addEventListener('click', function () {
                dialog.close();
            });
        }());
    </script>
</body>

</html>