<?php

    
    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    
    $id = $_GET['id'];
    $inspector =$_POST['inspector'];
    $cantidad =$_POST['cantidad'];
    $producto =$_POST['producto'];
    
    // 2. Sentencia SQL
    $sql = "UPDATE  reportemovimientos SET  codInspector=$inspector, cantidad=$cantidad,idproducto=$producto WHERE id=$id";
    $stmt = $con->prepare($sql);
    
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
    header("Location:index.php")

?>