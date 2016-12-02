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
function modRegistro(){
    
    //Conexión
    $con = new PDO("mysql:host=localhost;dbname=pedido;charset=utf8", "root", "");
    
     $user_elemento = $_POST['elemento'];
  $users_cantidadele = $_POST['cantidadele'];
  $users_entrada = $_POST['entrada'];
  $users_salida = $_POST['salida'];
  $idregistro = $_GET['idregistro'];
    
    
     //Sentencia SQL
    $sql = "
  INSERT INTO registro (`elemento`, `cantidadele`, `entrada`,
        `salida`, `timestamp`, `idregistro`) VALUES ('$user_elemento',
        '$users_cantidadele', '$users_entrada', '$users_salida',
        CURRENT_TIMESTAMP, '$idregistro');";
    
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