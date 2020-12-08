<?php
    include("../connect/connection.php");

    $documento = $_POST["documento"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $tipo_usu = $_POST["id_tipo_usu"];

    $insertar = "INSERT INTO usuarios(documento, nombres, apellidos, email, usuario, password, id_tipo_usu) 
    VALUES ('$documento','$nombres', '$apellidos','$email','$usuario', '$password', '$tipo_usu')";
    
    $resultado = mysqli_query ($mysqli, $insertar);

    if($resultado){
        echo "<script> alert('Se ha resgistrado el usuario con exito');
         window.location='/eval-fin-2020-lmga'</script>";
    }
    else{
        echo "<script> alert('No se pudo registrar');window.history.go(-1);</script>";
    }
    ?>