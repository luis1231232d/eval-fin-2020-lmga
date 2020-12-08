<?php
    include("../connect/connection.php");

    $id = $_GET['id'];
    $eliminar = "DELETE FROM usuarios WHERE documento = '$id'";

    $resultadoEliminar = mysqli_query ($mysqli, $eliminar);

    if($resultadoEliminar){
        header ("Location: edicion.php");
    }
    else{
        echo "<script> alert('No se pudo Eliminar'); window.history.go(-1);</script>";
    }