<?php
if (isset($_POST["registrarse"])){
    require_once("RegistroUser.php");

    $register = new RegistroUser();

    $register->setIdCamper(2);
    $register->setEmail($_POST["email"]);
    $register->setUsername($_POST["username"]);
    $register->setPassword($_POST["password"]);

    $register->insertData();

    echo "<script> alert('usuario registrado');
    document.location='loginRegister.php';</script>";
    
}
?>