<?php

require_once("../Config/db.php");
require_once("../Config/Conectar.php");

class RegistroUser extends Conectar{
private $email;
private $username;
private $password;
private $idCamper;
private $id;

public function __construct($id=0, $email="", $username="", $password="", $idCamper="",  $dbCnx="",){
    $this->id = $id;
    $this->email = $email;
    $this->username = $username;
    $this->password = $password;
    parent::__construct($dbCnx);
}

public function setId($id){
    $this->id= $id;
}
public function getId(){
    return $this->id;
} 

public function setEmail($email){
    $this->email= $email;
}

public function getEmail(){
    return $this->email;
}

public function setUsername($username){
    $this->username= $username;
}

public function getUsername(){
    return $this->username;
}


public function setIdCamper($idCamper){
    $this->idCamper= $idCamper;
}

public function getIdCamper(){
    return $this->idCamper;
}

public function setPassword($password){
    $this->password= $password;
}
public function getPassword(){
    return $this->password;
}
 
public function insertData(){
    try {

        $stm = $this->dbCnx->prepare("INSERT INTO users (idCamper, email, username, PASSWORD) VALUES (?,?,?,?)");
        echo $this->idCamper. $this->email. $this->username. $this->password;
        $stm->execute([$this->idCamper, $this->email, $this->username, md5($this->password)]);
        echo "then";
    } catch (Exeption $e) {
        echo "d";
        return $e->getMessage();
    }
}

}