<?php
    include("../connect/connection.php");
    $id = $_GET["id"];
	$usuarios = "select * from usuarios where id_tipo_usu = 3 and documento = '$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuarios Actualizados</title>
	<link rel="stylesheet" href="../css/consultas.css">
</head>
<header id="header">
    <div class="salir">
       <a href="edicion.php"><img height="30px" widih="50px"src= "../img/salir.jpg.png" alt=""></a> 
    </div>
</nav>
</header> 
<body>
	<form class="container-table container-table--edit" action="proce_actualizar.php" method="POST">
        <div class="table__title table__title--edit">Datos de los Clientes</div>
        <div class="table__header">Documento</div>
        <div class="table__header">Nombres</div>
        <div class="table__header">Apellidos</div>
        <div class="table__header">Email</div>
        <div class="table__header">Operacion</div>
		<?php $resultado = mysqli_query($mysqli, $usuarios);
        while ($row= mysqli_fetch_assoc($resultado)) { ?>
        <input type="hidden" class="table__item" value="<?php echo $row["documento"];?>" name="id">
            <div class="table__item"><?php echo $row["documento"];?></div>
            <input type="text" class="table__input" value="<?php echo $row["nombres"];?>" name="nombres">
            <input type="text" class="table__input" value="<?php echo $row["apellidos"];?>" name="apellidos">
            <input type="text" class="table__input" value="<?php echo $row["email"];?>" name="email">
            <?php } mysqli_free_result($resultado);?>
            <input type="submit" value="actualizar" class="container__submit container__submit--actualizar">      		  
        </form>	
</body>
</html>