<?php

    require_once( "../connect/connection.php");
    include("../includes/iniciosesion.php");
    $sql = "SELECT * FROM usuarios, tipo_usuario where documento = '".$_SESSION['id_user']."' AND usuarios.id_tipo_usu=tipo_usuario.id_tipo_usu";
    $usuarios = mysqli_query ($mysqli, $sql) or die (mysqli_error());
    $row_usuarios = mysqli_fetch_assoc ($usuarios);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADIMINSTRADOR</title>
    <link rel="stylesheet" href="../css/usu.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
</head>
<body>
    
    <header id="header">
        <nav class="menu">
            <div class="logo">
                <img  height="86px" width="170px" src="../img/logo1.jpeg" alt="">
            </div>
            <a class="nombre">BIENVENIDO ADMINISTRADOR</a>
            <div class="salir">
               <a href="../includes/salir.php"><img height="30px" widih="50px" src= "../img/salir.jpg.png" alt=""></a> 
            </div>
        </nav>
    </header> 
    <div class="foto">
        <img height="100px" widih="100px" src= "../img/foto.jpg.jpg" alt="">
        <h3 class= "admin"> Luis Miguel </h3>
        <h3 class= "admin1">Garcia Aranzalez</h3>
    </div>
    <div class="menu2"> 
        <ul class="nav">
            <li><a href="#">INFORMACION PESONAL</a>
                <ul>
                    <li><a href="edicionadmin.php">Editar pefil</a></li>
                </ul>
            </li>
            <br>
            <li><a href="#">ADMINISTRACION DE USUARIOS</a>
                <ul>
                    <li><a href="mostrar.php">Mostrar usuarios</a></li>
                    <li><a href="insertar.html">Crear usuario</a></li>
                    <li><a href="edicion.php">Modificar o Eliminar usuarios</a></li>
                </ul>
            </li>
            <br>
            <li><a href="#">VENTAS</a>
                <ul>
                    <li><a href="">MENSUALES</a></li>
                    <li><a href="">DIARIAS</a></li>
                </ul>
            </li>
        </ul>   
    </div>
</body>
</html>