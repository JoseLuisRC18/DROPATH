<?php
	require 'conexione.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM proveedor WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

                <div class="form-group">
					<label for="producto" class="col-sm-2 control-label">Producto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="producto" name="producto" placeholder="Producto" value="<?php echo $row['producto']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="correo" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
						<input type="correo" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad']; ?>" required>
					</div>
				</div>

                <div class="form-group">
					<label for="precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" value="<?php echo $row['precio']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>