<?php

//var_dump("$_POST");

$producto=$_POST['producto'];
$idproducto=$_POST['idproducto'];
$fechapedido=$_POST['fechapedido'];
$cliente=$_POST['cliente'];
$cantidad=$_POST['cantidad'];
$modoenvio = $_POST['modoenvio'];
$direccion=$_POST['direccion'];
$precio=$_POST['precio'];


//Conexión
    $con = new PDO("mysql:host=localhost;dbname=pedido;charset=utf8", "root", "");
    
    //Sentencia SQL
    $sql = "SELECT * FROM pedido";
    $stmt = $con->prepare($sql);
    
    
    //Ejecutar sentencia
    $stmt->execute();