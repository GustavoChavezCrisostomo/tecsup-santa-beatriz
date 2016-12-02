<?php
    $archivo = $_FILES['archivo'];
    $nombrefile = $_FILES['archivo']['name'];
    $rutatmp = $_FILES['archivo']['tmp_name'];
    $rutanueva = "/var/data/".$nombrefile;
            
    if(is_uploaded_file($rutatmp)) {
    if(copy($rutatmp, $rutanueva)) {
    echo '<script language="javascript">alert("Archivo subido satisfactoriamente");</script>';
    
    } else {
    echo '<script language="javascript">alert("No se ha podido subir el archivo");</script>';
    }
    }else {
    echo '<script language="javascript">alert("No, no ha cargado");</script>';
    }
    
    
    
    
?>