<?php
if (isset($_POST["registrarse"])){
    require_once("RegistroUser.php");

    $register = new RegistroUser();

    $register->setIdCamper(3);
    $register->setEmail($_POST["email"]);
    $register->setUsername($_POST["username"]);
    $register->setPassword($_POST["password"]);

/*     $register->insertData();

    echo "<script> alert('usuario registrado');
    document.location='loginRegister.php';</script>"; */
    if ($register->checkUser($_POST['email'])){
        echo "<script> alert('usuario ya existe, por favor logueate');
    document.location='loginRegister.php';</script>";
    }else{
        $register->insertData();
        echo "<script> alert('usuario registrado');
    document.location='../Home/home.php';</script>";
    }
}
?>