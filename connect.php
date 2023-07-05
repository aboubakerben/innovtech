<?php 
    $host = "localhost";
    $username = "root";
    $password = "root";
    
    $db_name = "innovdata";

    $conect = mysqli_connect($host,$username,$password,$db_name);

    if(!$conect){
        echo "Connexion failed!";
    }

?>