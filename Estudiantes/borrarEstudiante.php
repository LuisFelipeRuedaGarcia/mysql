<?php
require_once ("config.php");
$record = new Config();
if (isset($_GET['id']) && isset($_GET['req'])){
    if($_GET['req']== "delete"){

        $record -> setId($_GET['id']);
        $record -> delete();
        echo 3;
        echo "<script>
        alert('Dato Borrado');
        document.location='estudiantes.php';
        </script>";
        echo"final";
    }
};
?>