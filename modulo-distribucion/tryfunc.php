<?php

function listarPedidos(){
    
    //Conexión
    $con = new PDO("mysql:host=localhost;dbname=pedido;charset=utf8", "root", "");
    
    //Sentencia SQL
    $sql = "SELECT * FROM pedido";
    $stmt = $con->prepare($sql);
    
    
    //Ejecutar sentencia
    $stmt->execute();
    
    //Recuperamos datos
    $lista = array();
    while($registro = $stmt->fetchObject()){
    $lista[]= $registro;
    }
    return $lista;
    
}
function listarRegistros(){
    
    //Conexión
    $con = new PDO("mysql:host=localhost;dbname=pedido;charset=utf8", "root", "");
    
    //Sentencia SQL
    $sql = "SELECT * FROM registro";
    $stmt = $con->prepare($sql);
    
    
    //Ejecutar sentencia
    $stmt->execute();
    
    //Recuperamos datos
    $lista = array();
    while($registro = $stmt->fetchObject()){
    $lista[]= $registro;
    }
    return $lista;
    
}

