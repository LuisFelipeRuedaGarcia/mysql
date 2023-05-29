<?php 
if(isset($_POST['guardar'])){
    require_once ("config.php");

    $config = new Config();

    $config -> setNombres($_POST['nombres']);
    $config -> setDireccion($_POST['direccion']);
    $config -> setLogros($_POST['logros']);

    $config -> insertData();
    echo "<script> alert('los datos fueron guardados');
    document.location='estudiantes.php';</script>";
    
}
?>