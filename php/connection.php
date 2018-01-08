<?php
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=inConsulta","root","");
        //echo("Ok");
    } catch (PDOException $exc) { 
        echo $exc->getMessage();
        exit();
    }
?>
