<?php

if(!($_SESSION['usuario']) || !isset($_SESSION['nome'])){
    header('Location: login.php');
    exit();
}