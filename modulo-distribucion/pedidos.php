<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Santa Beatriz</title>


    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">


    <!-- Template styles -->

    <style>
        #sortable1,
        #sortable2 {
            border: 1px solid #eee;
            width: 147px;
            min-height: 20px;
            list-style-type: none;
            margin: 0;
            padding: 5px 0 0 0;
            float: left;
            margin-right: 10px;
        }

        #sortable1 li,
        #sortable2 li {
            margin: 0 5px 0px 5px;
            padding: 5px;
            font-size: 1.2em;
            width: 120px;
        }
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .jumbotron {
            text-align: center;
        }

        table#sourcetable tbody tr {
            cursor: pointer;
        }

        input[type=checkbox] {
            border-radius: 3px;
            -webkit-appearance: button;
            border: solid 3px #00ff8c;
            background-color: #fff;
            color: #FFF;
            white-space: nowrap;
            overflow: hidden;
            width: 25px;
            height: 25px;
        }

        input[type=checkbox]:checked {
            background-color: #00ff8c;
        }
        #titulo1 {
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
    <script src="js/jquery-2.2.3.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        var addedrows = new Array();

        $(document).ready(function() {
            $("#sourcetable tbody tr").on("click", function(event) {

                var ok = 0;
                var theid = $(this).attr('id').replace("sour", "");

                var newaddedrows = new Array();

                for (index = 0; index < addedrows.length; ++index) {

                    // if already selected then remove
                    if (addedrows[index] == theid) {

                        // remove from second table :
                        var tr = $("#dest" + theid);
                        tr.css("background-color", "#00ff8c");
                        tr.fadeOut(400, function() {
                            tr.remove();
                        });

                        //addedrows.splice(theid, 1);

                        //the boolean
                        ok = 1;
                    } else {

                        newaddedrows.push(addedrows[index]);
                    }
                }

                addedrows = newaddedrows;

                if (!ok) {
                    addedrows.push(theid);
                    $('#destinationtable tr:last').after('<tr id="dest' + theid + '"><td>' +

                        $(this).find("td").eq(1).html() + '</td><td>' +
                        $(this).find("td").eq(2).html() + '</td><td>' +
                        $(this).find("td").eq(3).html() + '</td><td>' +
                        $(this).find("td").eq(4).html() + '</td><td>' +
                        $(this).find("td").eq(5).html() + '</td><td>' +
                        $(this).find("td").eq(6).html() + '</td><td>' +
                        $(this).find("td").eq(7).html() + '</td><td>' +
                        $(this).find("td").eq(8).html() + '</td><td>' +
                        $(this).find("td").eq(9).html() + '</td></tr>');

                }

            });


        });
    </script>
        <link href="intro.js-2.3.0/introjs.css" rel="stylesheet">

    <link href="intro.js-2.3.0/example/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
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
                            <a class="nav-link" href="index.html">Inicio </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro.php">Registro</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="pedidos.php"><span id="titulo1">Pedidos</span></a>
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

        <div class="container">
            <!--First row-->
            
            <?php 
            
            
            require 'tryfunc.php';
            
            $pedidos=listarPedidos();
            $contador=0;
            ?>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-block">

                        <h2 class="card-title">Pedidos por confirmar:</h2>

                        <table id="sourcetable" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp col-md-12">
                            <thead>
                                <tr>
                                        <th data-step="1" data-intro="¡Haz click en la casilla para verificar!">Checker</th>
                                        <th>ID Pedido</th>
                                        <th>Fecha pedido</th>
                                        <th>    ID Producto  </th>
                                        <th class="mdl-data-table__cell--non-numeric">Producto</th>
                                        <th class="mdl-data-table__cell--non-numeric">Cliente</th>
                                        <th>Cantidad</th>
                                        <th class="mdl-data-table__cell--non-numeric">Modo envío</th>
                                        <th class="mdl-data-table__cell--non-numeric">Dirección</th>
                                        <th>Precio</th>
                                    </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($pedidos as $i=> $pedido){?>
                                
                                
                                <tr id="sour<?= $i ?>">
                                    
                                    <td><input type="checkbox" /> </td>
                                    <td><?php echo $pedido->idpedido ?></td>
                                    <td>
                                        <?php echo $pedido->fechapedido ?>
                                    </td>
                                    <td>
                                      <?php  echo $pedido->idproducto ?>
                                    </td>
                                    <td>
                                     <?php echo $pedido->producto ?>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <?php echo $pedido->cliente?>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <?php echo $pedido->cantidad ?>
                                    </td>
                                    <td>
                                        <?php echo $pedido->modoenvio ?>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <?php echo $pedido->direccion ?>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <?php echo $pedido->precio ?>
                                    </td>
                                </tr>
                              <?php 
                              $contador++;
                              } ?>
                             
                            </tbody>
                        </table>
</div>
</div>
                    </div>

  <hr class="extra-margins">

        <!--Main layout-->
        <div class="col-md-12">
            <!--First row-->
            <div class="card">
                <div class="card-block">

                        <h2 class="card-title"  data-step="2" data-intro="¡Genial, estos estarán verificados!">Pedidos verificados:</h2>


                        <form method="POST" action="">
                            <table id="destinationtable" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp col-md-12">
                                <thead>
                                    <tr>
                                        <th>ID Pedido</th>
                                        <th>Fecha pedido</th>
                                        <th>    ID Producto  </th>
                                        <th class="mdl-data-table__cell--non-numeric">Producto</th>
                                        <th class="mdl-data-table__cell--non-numeric">Cliente</th>
                                        <th>Cantidad</th>
                                        <th class="mdl-data-table__cell--non-numeric">Modo envío</th>
                                        <th class="mdl-data-table__cell--non-numeric">Dirección</th>
                                        <th class="mdl-data-table__cell--non-numeric">Precio</th>
                                    </tr>
                                </thead>
                            </table>
                        </form>

                    </div>

                </div>
</div>

<button class="btn btn-large btn-success" href="javascript:void(0);" onclick="javascript:introJs().setOption('showProgress', true).start();">Enséñame cómo hacerlo.</button>
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



  <script type="text/javascript" src="intro.js-2.3.0/intro.js"></script>


</body>

</html>
