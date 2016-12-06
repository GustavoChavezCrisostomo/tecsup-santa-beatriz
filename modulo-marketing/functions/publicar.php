<?php

function publicidad(){
    
    
    $con = new PDO("mysql:host=localhost;dbname=Publicidad;charset=utf8", "root", "");
    
    $sql  = "select codigo_de_publicacion, Estado, idpublicidad, imagen, nombre
            from publicidad" ;
            
    $stmt = $con->prepare($sql);
    
    
    $stmt->execute();
    
    
    $publicidad = array();
    while($registro = $stmt->fetchObject()){
        $publicidad[] = $registro;
    }

    return $publicidad;
}