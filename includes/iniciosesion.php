<?php
    
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['tipo_usuario']))
    {
        header("location: ../login.html");
        exit;
    }
?>