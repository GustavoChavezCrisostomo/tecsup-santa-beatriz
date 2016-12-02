<?php

    //var_dump($_POST);

    $inspector =$_POST['inspector'];
    $cantidad =$_POST['cantidad'];
    $producto =$_POST['producto'];
    $estado =$_POST['estado'];

    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    
    // 2. Sentencia SQL
    $sql = "INSERT INTO movimientosdiarios(cantidad, codInspector, estado, idproducto) VALUES ($cantidad, $inspector, '$estado', $producto)";
    $stmt = $con->prepare($sql);
            
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
    header("Location:index.php")
    
?>