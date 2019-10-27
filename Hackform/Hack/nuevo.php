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
   	   	  	<h3 style="text-align: center">NUEVO REGISTRO</h3>
   	   	  </div>

   	   	  <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
   	   	  		    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
   	   	  		    <div class="col-sm-10">
   	   	  			   <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
   	   	  		    </div>
				</div>
                <div class="form-group">
   	   	  		    <label for="producto" class="col-sm-2 control-label">Producto</label>
   	   	  		    <div class="col-sm-10">
   	   	  			   <input type="text" class="form-control" id="producto" name="producto" placeholder="Producto" required>
   	   	  		    </div>
				</div>		   

   	   	  	   <div class="form-group">
   	   	  		  <label for="correo" class="col-sm-2 control-label">Correo</label>
   	   	  		  <div class="col-sm-10">
   	   	  			  <input type="correo" class="form-control" id="correo" name="correo" placeholder="Correo" required>
   	   	  		  </div>
   	   	  	   </div>

                 <div class="form-group">
   	   	  		  <label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
   	   	  		  <div class="col-sm-10">
   	   	  			  <input type="Cantidad" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
   	   	  		  </div>
   	   	  	   </div>            

   	   	  	   <div class="form-group">
   	   	  		    <label for="precio" class="col-sm-2 control-label">Precio</label>
   	   	  		    <div class="col-sm-10">
   	   	  			   <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" required>
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