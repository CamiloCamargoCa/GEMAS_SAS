<?php
  //include 'Conexion.php'; 
   include 'servidor.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GEMA SAS</title>
	<link href="bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script src="bootstrap-4.0.0-dist/js/funciones.js" type="text/javascript"></script>
	<script src="bootstrap-4.0.0-dist/js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="style.css">
	<style>
	table{
		text-align: center;
	}
	a{
		font-size: 20px;
		font-family: arial;
		color: blue;
		font-weight: bold;
		padding-top: 10%;
	}
	</style>
</head>
<body>

	<div class="container-fluid">

	<div class="container-fluid" style="position: fixed;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">Volver</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#Activos">Activos</a>
      </li>
      <li  class="nav-item active">
        <a class="nav-link" href="#Inactivos">Inactivo</a>
      </li>
      <li  class="nav-item active">
        <a class="nav-link" href="#Espera">Espera</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<br><br><br>
	<a name="Activos">Usuarios Activos Estado 1</a>
	<table  class="table table-striped table-hover" id="navegador">
	<thead>
    <tr  style="background-color:#000">
	<td  style="color:white;font-size:16px;font-weight:bold;">Id</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Email</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Nombre</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Apellido</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Estado</td>		
	</tr>
        </thead>
    <?php    
   $row=new usuarios();
   $listado=$row->listarUsuariosActivos(); 
    while($fila=mysqli_fetch_array($listado)){
          ?>  
        <tbody>
		<tr>
		<td style="color:#286090;font-size:13px;"><?php echo $fila['id']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['email']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['nombre']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['apellido']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['estado']; ?></td>
        </tr>
        </tbody>
                   <?php } ?>  
        </table>


<br>
	<a name="Inactivos">Usuarios Inactivos Estado 2</a>
	<table  class="table table-striped table-hover" id="navegador">
	<thead>
    <tr style="background-color:#000">
	<td  style="color:white;font-size:16px;font-weight:bold;">Id</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Email</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Nombre</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Apellido</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Estado</td>		
	</tr>
        </thead>
    <?php    
   $row=new usuarios();
   $listado=$row->listarUsuariosInactivos(); 
    while($fila=mysqli_fetch_array($listado)){
          ?>  
        <tbody>
		<tr>
		<td style="color:#286090;font-size:13px;"><?php echo $fila['id']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['email']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['nombre']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['apellido']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['estado']; ?></td>
        </tr>
        </tbody>
                   <?php } ?>  
        </table>


<br>
	<a name="Espera">Usuarios En Espera Estado 3</a>
	<table  class="table table-striped table-hover" id="navegador">
	<thead>
    <tr style="background-color:#000">
	<td  style="color:white;font-size:16px;font-weight:bold;">Id</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Email</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Nombre</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Apellido</td>
	<td  style="color:white;font-size:16px;font-weight:bold;">Estado</td>		
	</tr>
        </thead>
    <?php    
   $row=new usuarios();
   $listado=$row->listarUsuariosEspera(); 
    while($fila=mysqli_fetch_array($listado)){
          ?>  
        <tbody>
		<tr>
		<td style="color:#286090;font-size:13px;"><?php echo $fila['id']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['email']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['nombre']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['apellido']; ?></td>
		<td style="font-size:16px;"><?php echo $fila['estado']; ?></td>
        </tr>
        </tbody>
                   <?php } ?>  
        </table> 
        </div>
              
</body>
</html>