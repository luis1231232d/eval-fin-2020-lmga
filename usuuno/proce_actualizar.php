<?php
    include("../connect/connection.php");

    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];

    $actualirzar = "UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos', email='$email' where documento='$id'";

    $resultado = mysqli_query ($mysqli, $actualirzar);

    if($resultado){
        echo "<script> alert('Se han actualizado los datos con exito');
         window.location='/eval-fin-2020-lmga/usuuno/edicion.php'</script>";
    }
    else{
        echo "<script> alert('No se pudo actualizar los datos');window.history.go(-2);</script>";
    }