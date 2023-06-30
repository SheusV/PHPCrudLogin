<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $dbname = 'crud';

    $con = mysqli_connect($host, $user, $senha, $dbname);

    if(!$con){
        die('Connection Failed'. mysqli_connect_error());
    }
?>


