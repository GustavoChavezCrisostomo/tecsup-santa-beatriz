<?php

function listar(){
    
    // 1 Conexion 
    $con = new PDO("mysql:host=localhost;dbname=tienda;charset=utf8", "root", "");
    
    // 2 Crear la sentencia
    $sql  = "select p.id, categorias_id, c.nombre as categorias_nombre, p.nombre, descripcion, precio, imagen 
            from productos p
            inner join categorias c on c.id=p.categorias_id";
            
    $stmt = $con->prepare($sql);
    
    // 3 Ejecutamos la sentencia
    $stmt->execute();
    
    // 4 Recuperamos los registros
    $lista = array();
    while($registro = $stmt->fetchObject()){
        $lista[] = $registro;
    }

    return $lista;
}