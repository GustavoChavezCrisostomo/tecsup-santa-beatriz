<?php
require_once('funciones.php');

$lista = listarReportes();

?>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Reportes</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.deep_orange-indigo.min.css" />
	<link rel="stylesheet" href="styles.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> </head>

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
			<div class="mdl-layout__header-row portfolio-logo-row"> <span class="mdl-layout__title">
                    <a href="#"><div class="portfolio-logo"></div></a>
                    <span class="mdl-layout__title"></span> </span>
			</div>
			<div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
				<nav class="mdl-navigation mdl-typography--body-1-force-preferred-font"> <a class="mdl-navigation__link" href="insertar.php">Insertar</a> <a class="mdl-navigation__link" href="modificar.php">Modificar</a> <a class="mdl-navigation__link" href="buscar.php?id=0">Buscar</a></nav>
			</div>
		</header>
		<div class="mdl-layout__drawer mdl-layout--small-screen-only">
			<nav class="mdl-navigation mdl-typography--body-1-force-preferred-font"> <a class="mdl-navigation__link" href="insertar.php">Insertar</a> <a class="mdl-navigation__link" href="modificar.php">Modificar</a> <a class="mdl-navigation__link" href="buscar.php?id=0">Buscar</a></nav>
		</div>
		<main class="mdl-layout__content">
			<div class="mdl-grid portfolio-max-width">
				<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Página de gestión de Reportes</h2> </div>
					<center>
						<table class="mdl-data-table mdl-js-data-table">
							<thead>
								<tr>
									<th class="mdl-data-table__cell--non-numeric">ID</th>
									<th class="mdl-data-table__cell--non-numeric">Fecha</th>
									<th class="mdl-data-table__cell--non-numeric">ID Inspector</th>
									<th class="mdl-data-table__cell--non-numeric">Cantidad</th>
									<th class="mdl-data-table__cell--non-numeric">ID Producto</th>
									<th class="mdl-data-table__cell--non-numeric">Editar</th>
									<th class="mdl-data-table__cell--non-numeric">Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
                            foreach($lista as $reporte){
                        ?>
                        <tr>
                            <td><?php echo $reporte->id?></td>
                            <td><?php echo $reporte->fecha?></td>
                            <td><?php echo $reporte->codInspector?></td>
                            <td><?php echo $reporte->cantidad?></td>
                            <td><?php echo $reporte->idproducto?></td>
							<td><a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="modificar.php?id=<?php echo $reporte->id?>">Editar</a></td>
                            <td><a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" href="borrar.php?id=<?php echo $reporte->id?>">Eliminar</a></td>
                        </tr>
                        <?php
                            }
                        ?>
							</tbody>
						</table>
					</center>
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