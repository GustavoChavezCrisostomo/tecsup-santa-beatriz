<?php

    
    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    
    $id = $_GET['id'];
    
    // 2. Sentencia SQL
    $sql = "DELETE FROM reportemovimientos WHERE id='$id'";
    $stmt = $con->prepare($sql);
    
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
    header("Location:index.php")

?>