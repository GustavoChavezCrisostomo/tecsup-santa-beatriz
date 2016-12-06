<?php

function listarProductos(){
    
    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=Ventas;charset=utf8", "root", "");
    
    // 2. Sentencia SQL
    $sql = "select * from Producto";
    $stmt = $con->prepare($sql);
    
    // 3. Ejecutamos
    $stmt->execute();
    
    // 4. Recuperamos los datos
    $lista = array();
    while($registro = $stmt->fetchObject()){
        $lista[] = $registro;
    }
    
    return $lista;
}