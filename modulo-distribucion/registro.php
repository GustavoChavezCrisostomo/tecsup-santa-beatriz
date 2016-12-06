<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Santa Beatriz</title>

    <!-- Font Awesome -->
     <script type="text/javascript" src="js/jquery-2.2.3.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }
        #tablaregistro{
            visibility:hidden;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .jumbotron {
            text-align: center;
        }
        #titulo2 {
       animation: flipper 4s ease-in 2s infinite;
       -moz-animation: flipper 4s ease-in 2s infinite;
       -webkit-animation: flipper 4s ease-in 2s infinite;

       transform-style: preserve-3d;
       -webkit-transform-style: preserve-3d;
       -moz-transform-style: preserve-3d;
       display: inline-block;
     }
     @-webkit-keyframes flipper {
      0% {
        -webkit-transform: perspective(300px) rotateY(0deg);
      }
      15%, 100% {
        -webkit-transform: perspective(300px) rotateY(360deg);
      }
    }
    @-moz-keyframes flipper {
      0% {
        -moz-transform: perspective(300px) rotateY(0deg);
      }
      15%, 100% {
        -moz-transform: perspective(300px) rotateY(360deg);
      }
    }
    @keyframes flipper {
      0% {
        transform: perspective(300px) rotateY(0deg);
      }
      15%, 100% {
        transform: perspective(300px) rotateY(360deg);
      }
    }
    </style>
    <link href="css/style1.css" rel="stylesheet"/>
  
  

</head>

<body>


    <header>

        <!--Navbar-->
        <nav class="navbar navbar-dark primary-color-dark">

            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                <i class="fa fa-bars"></i>
            </button>

            <div class="container">

                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="../index.html" target="_blank">MDSB</a>
                    <!--Links-->
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="registro.php"><span id="titulo2">Registro</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pedidos.php">Pedidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="guiasremision.html">Guías de Remisión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="facturas.html">Facturas</a>
                        </li>
                    </ul>
                    <!--Search form-->
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Buscar por código...">
                    </form>
                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->

    </header>

    <main>

        <!--Main layout-->
        <div class="container">
            <!--First row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h2 class="h2-responsive">Registro de almacén</h2>

                        <hr>
                        
                        <table class="mdl-data-table mdl-js-data-table col-md-12">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="mdl-data-table__cell--non-numeric">Elemento</th>
                                    <th>Cantidad</th>
                                    <th class="mdl-data-table__cell--non-numeric">Entrada</th>

                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>102030</td>
                                    <td class="mdl-data-table__cell--non-numeric">Pedido</td>
                                    <td>-</td>
                                    <td class="mdl-data-table__cell--non-numeric">04-08-16</td>

                                
                                </tr>
                                <tr>
                                    <td>67789</td>
                                    <td class="mdl-data-table__cell--non-numeric">Guía remisión</td>
                                    <td>-</td>
                                    <td class="mdl-data-table__cell--non-numeric">14-11-16</td>

                                    
                                </tr>
                                

                            </tbody>
                             <?php 
            
            
            require 'tryfunc.php';
            
            $registros=listarRegistros();
          
            ?>
                        </table>
                              <hr class="extra-margins">
              <button id="anteriores" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">Anteriores <i class="fa fa-download right"></i></button>

                    </div>
                    <div class=card-block>
                        <table id="tablaregistro" class="mdl-data-table mdl-js-data-table col-md-12">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="mdl-data-table__cell--non-numeric">Elemento</th>
                                    <th>Cantidad</th>
                                    <th class="mdl-data-table__cell--non-numeric">Entrada</th>

                                </tr>
                            </thead>
                            
                            <tbody>
                                
                                <?php foreach($registros as $i=> $registro){?>
                                <tr>
                                    <td><?php echo $registro->idregistro ?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo $registro->elemento ?></td>
                                    <td><?php echo $registro->cantidadele ?></td>
                                    <td class="mdl-data-table__cell--non-numeric"><?php echo $registro->entrada ?></td>
                                </tr>
                               
                                 <?php 
                              
                              } ?>

                            </tbody>
                        </table>
                        </div>
                </div>
            </div>


    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only primary-color-dark">


        <!--Call to action-->
        <div class="call-to-action">

            <ul>
                <li>
                    <li><a target="_blank" href="../index.html" class="btn btn-default">SALIR</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->

 <script>
      
              $("#anteriores").on('click',function(){
                 $("#tablaregistro").css("visibility","visible");
              });
            

    </script>
    <!-- Bootstrap tooltips -->
    
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>



</body>

</html>
