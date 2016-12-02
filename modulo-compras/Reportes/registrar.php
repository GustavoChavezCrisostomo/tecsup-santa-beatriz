<?php

    //var_dump($_POST);

    $inspector =$_POST['inspector'];
    $cantidad =$_POST['cantidad'];
    $producto =$_POST['producto'];

    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    
    // 2. Sentencia SQL
    $sql = "insert into reportemovimientos (codInspector, cantidad, idproducto)
            values($inspector, $cantidad, $producto)";
    $stmt = $con->prepare($sql);
            
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
    header("Location:index.php")
    
?>