<?php

    
    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    
    $id = $_GET['id'];
    $inspector =$_POST['inspector'];
    $cantidad =$_POST['cantidad'];
    $producto =$_POST['producto'];
    $estado =$_POST['estado'];
    // 2. Sentencia SQL
    $sql = "UPDATE  movimientosdiarios SET  codInspector=$inspector, cantidad=$cantidad,idproducto=$producto,estado='$estado' WHERE id=$id";
    $stmt = $con->prepare($sql);
    
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
    header("Location:index.php")

?>