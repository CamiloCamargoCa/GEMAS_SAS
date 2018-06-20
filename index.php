<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GEMA SAS</title>
	<link href="bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script src="bootstrap-4.0.0-dist/js/funciones.js" type="text/javascript"></script>
	<script src="bootstrap-4.0.0-dist/js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="">
</head>
<body>
<div class="container">
<br>
<br>
<br>
	<article>
		<section>
		<form action="cargarArchivo.php" method="post" enctype="multipart/form-data">
			<p>Subir Archivo</p>
			<p><input type="file" name="txt"></p>
			<p><input type="submit" value="Subir Archivo"></p>
			</form>
		</section>

		<a href="datos.php">Ver Datos Registrados</a>
	</article>
	</div>
</body>
</html>
