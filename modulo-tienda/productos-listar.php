<?php
require_once('functions/productos.php');

$lista = listar();
//var_dump($lista);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- jQuery -->
        <script src="js/jquery-1.12.3.min.js"></script>
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        
        <!-- My custom style -->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        
        <header class="header">
            <div class="container-fluid">
                <div class="logo-header"><img src="img/logo.png" height="60" alt="Tecsup"/></div>
            </div>
        </header>
        
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <!-- Menu btn -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-menu-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Tecsup</a>
                </div>

                <!-- Menu options -->
                <div class="collapse navbar-collapse" id="bs-menu-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li><a href="usuarios-listar.php">Usuarios</a></li>
                        <li><a href="productos-listar.php">Productos</a></li>
                        <li><a href="clientes-listar.php">Clientes</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Salir</a></li>
                    </ul>

                </div>
            </div>
        </nav>
        
        <div class="container-fluid">
            
            
            <div class="table-responsive">
                <table border="1" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CATEGORIA</th>
                            <th>NOMBRE</th>
                            <th>PRECIO</th>
                            <th>IMAGEN</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lista as $producto){
                        ?>
                        <tr>
                            <td><?php echo $producto->id?></td>
                            <td><?php echo $producto->categorias_nombre?></td>
                            <td><?php echo $producto->nombre?></td>
                            <td>S/.<?php echo $producto->precio?></td>
                            <td><img src="productos/<?php echo $producto->imagen?>" height="32"></td>
                            <td><a href="" class="btn btn-info btn-sm">Mostrar</a></td>
                            <td><a href="" class="btn btn-warning btn-sm">Editar</a></td>
                            <td><a href="" class="btn btn-danger btn-sm">Eliminar</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            
            
        </div>
        
        <footer class="footer">
            <div class="container-fluid">
                <div class="text-footer">Todos los Derechos Reservados © <?php echo date('Y')?></div>
            </div>
        </footer>
        
    </body>
</html>
