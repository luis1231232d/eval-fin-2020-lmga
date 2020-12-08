<?php
    require_once("../connect/connection.php");
    if($_POST["inicio"])
    {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        $con = "select * from usuarios where usuario = '$usuario' and password = '$password'";
        $query=mysqli_query($mysqli, $con);
        $fila=mysqli_fetch_assoc($query);

        if($fila)
        {
            // si el usuario es correcto creamos las variables

            $_SESSION['id_user'] = $fila['documento'];
            $_SESSION['nombres'] = $fila['nombres'];
            $_SESSION['apellidos'] = $fila['apellidos'];
            $_SESSION['email'] = $fila['email'];
            $_SESSION['tipo_usuario'] = $fila['id_tipo_usu'];
            $_SESSION['usuario'] = $fila['usuario'];
            

            // dependiendo del tipo de USuario redireccionamos
            //si es un aprendiz
            if($_SESSION['tipo_usuario'] == 1 )
            {
                header("location: ../usuuno/index.php");
                exit();
            }
            elseif($_SESSION['tipo_usuario'] == 2)
            {
                header("location: ../usudos/index.php");
                exit();
            }else{
                // si son incorrectos lo va a mandar a un error 
                header("location: ../loginerror.html");
                exit();
                }          
        }
    }       
?>