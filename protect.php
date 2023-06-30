<?php
    if(!isset($_SESSION)){
        session_start();

    }
    if(!isset($_SESSION['nome'])){
        die("Favor fazer o login!");
    }


?>