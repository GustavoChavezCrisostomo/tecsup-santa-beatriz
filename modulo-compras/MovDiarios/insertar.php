<?php

    //var_dump($_POST);

    $nombre =$_POST['nombre'];
    $categorias_id =$_POST['categorias_id'];
    $descripcion =$_POST['descripcion'];
    $precio =$_POST['precio'];
    $stock =$_POST['stock'];

    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    
    // 2. Sentencia SQL
    $sql = "insert into producto (nombre, categoria_id, descripcion, precio, stock)
            values('$nombre', $categorias_id, '$descripcion', $precio, $stock)";
    $stmt = $con->prepare($sql);
            
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>MDL-Static Website</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Reportes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.deep_orange-indigo.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

  <body>
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
          <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
              <div class="mdl-layout__header-row portfolio-logo-row">
                  <span class="mdl-layout__title">
                      <a href="index.php"><div class="portfolio-logo"></div></a>
                      <span class="mdl-layout__title"></span>
                  </span>
              </div>
              <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                  <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                      <a class="mdl-navigation__link is-active" href="#">Insertar</a>
                      <a class="mdl-navigation__link" href="modificar.php">Modificar</a>
                      <a class="mdl-navigation__link" href="buscar.php">Buscar</a>
                  </nav>
              </div>
          </header>
          <div class="mdl-layout__drawer mdl-layout--small-screen-only">
              <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                  <a class="mdl-navigation__link is-active" href="#">Insertar</a>
                  <a class="mdl-navigation__link" href="modificar.php">Modificar</a>
                  <a class="mdl-navigation__link" href="buscar.php">Buscar</a>
              </nav>
          </div>
        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Insertar</h2> </div>
                    <div class="mdl-card__media"> <img class="article-image" src=" images/about-header.jpg" border="0" alt=""> </div>
                    <div class="mdl-grid portfolio-copy">
                        <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding ">
                            <!-- Simple Textfield -->
                            <form method="post" action="registrar.php" enctype="multipart/form-data">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input name="inspector" class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="input1">
                                    <label class="mdl-textfield__label" for="input1">ID Inspector</label> <span class="mdl-textfield__error">Input is not a number!</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input name="cantidad" class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="input2">
                                    <label class="mdl-textfield__label" for="input2">Cantidad</label> <span class="mdl-textfield__error">Input is not a number!</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input name="producto" class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="input3">
                                    <label class="mdl-textfield__label" for="input3">ID Producto</label> <span class="mdl-textfield__error">Input is not a number!</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input name="estado" class="mdl-textfield__input" type="text"id="input4">
                                    <label class="mdl-textfield__label" for="input4">Estado</label>
                                </div>
                                <br>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Simple portfolio website</div>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy & Terms</a></li>
                    </ul>
                </div>
            </footer>
        </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</body>

</html>
