<?php
	include("../connect/connection.php");
	$usuarios = "select * from usuarios where id_tipo_usu = 2";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar usuarios</title>
	<link rel="stylesheet" href="../css/consultas.css">
</head>
<header id="header">
    <div class="salir">
       <a href="index.php"><img height="30px" widih="50px"src= "../img/salir.jpg.png" alt=""></a> 
    </div>
</nav>
</header> 
<body>
	<div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Datos de los Clientes</div>
        <div class="table__header">Documento</div>
        <div class="table__header">Nombres</div>
        <div class="table__header">Apellidos</div>
        <div class="table__header">Email</div>
        <div class="table__header">Operacion</div>
		<?php $resultado = mysqli_query($mysqli, $usuarios);
        while ($row= mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["documento"];?></div>
            <div class="table__item"><?php echo $row["nombres"];?></div>
            <div class="table__item"><?php echo $row["apellidos"];?></div>
            <div class="table__item"><?php echo $row["email"];?></div>
            <div class="table__item">
                <a href="actualizar_vende.php?id=<?php echo $row["documento"];?>"class="table__item__link">Modificar</a>
            </div>
            <?php } mysqli_free_result($resultado);?>      		  
    </div>
</body>
</html>