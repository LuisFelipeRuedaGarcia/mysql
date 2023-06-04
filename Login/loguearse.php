<?php

session_start();

if(isset($_POST['loguearse'])){
    require_once("loginUser.php");
    $credenciales = new LoginUser();
    $credenciales->setEmail($_POST['email']);
    $credenciales->setPassword($_POST['password']);
    $login = $credenciales-> login();
    if($login){
        header('Location:../Home/home.php'); 
    }
    else{
        echo "<script> alert('datos no corresponden');
        document.location='loginRegister.php';</script>";
    };
}
?>
