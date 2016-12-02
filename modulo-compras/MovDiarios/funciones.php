<?php

function listarReportes(){
    
    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    
    // 2. Sentencia SQL
    $sql = "SELECT * FROM movimientosdiarios";
    $stmt = $con->prepare($sql);
    
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
    // 4. Recuperar datos
    $lista = array();
    while($registro = $stmt->fetchObject()){
        $lista[] = $registro;
    }
    
    return $lista;
}

function editar(){
    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    
    $id = $_GET['id'];
    
    // 2. Sentencia SQL
     $sql = "SELECT * FROM movimientosdiarios WHERE id='$id'";
    $stmt = $con->prepare($sql);
    
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
    // 4. Recuperar datos
    $lista = array();
    while($registro = $stmt->fetchObject()){
        $lista[] = $registro;
    }
    
    return $lista;
}

function buscarReporte(){
    
    // 1. Conexion
    $con = new PDO("mysql:host=localhost;dbname=compras;charset=utf8", "root", "");
    $id = $_GET['id'];
    // 2. Sentencia SQL
    $sql = "SELECT * FROM movimientosdiarios WHERE id='$id'";
    
    $stmt = $con->prepare($sql);
    
    // 3. Ejecutamos la sentencia
    $stmt->execute();
    
    // 4. Recuperar datos
    $reporte = $stmt->fetchObject();
    return $reporte;
}