<?php 

include ("conexion.php");

$formatoTexto = "";
$control_estado="/[0-9]{9}/";

if(substr($_FILES['txt']['name'],-3)=="txt") {
	cargarTxt();
}else{
	echo '<script language = javascript>
			alert("Archivo no valido"); 
			self.location = "index.php";
		</script>';
}


function cargarTxt(){
if (substr($_FILES['txt']['name'],-3)=="txt") {
	
	$fecha = date('y-m-d');
	$carpeta = "archivos-planos/";
	$plano = $fecha."-".$_FILES['txt']['name'];

	move_uploaded_file($_FILES['txt']['tmp_name'],"$carpeta$plano");


	$row = 1;
	$fp= fopen("$carpeta$plano","r");


	while($data =fgetcsv($fp,1000,",")){

		$numestado = $data[3];
		if((int)$numestado > 3){
			echo '<script language = javascript>
			alert("Formato Estado Usuario Incorrecto! , no es un numero del 1 al 3 '.$data[3].' registro '.$row.'"); 
			self.location = "index.php";
		</script>';
		}

		if (empty($numestado) || empty($numestado)) {
			echo '<script language = javascript>
			alert("Formato Incorrecto! , Campos correo o estado estan vacios"); 
			self.location = "index.php";
		</script>';
		}

		if ($row!=1) {
			$registro = "INSERT INTO usuarios (email,nombre,apellido,estado)
			VALUES ('$data[0]','$data[1]','$data[2]',$data[3])";
			$con=new Conectar();
			mysqli_query($con->conectar(),$registro);
		}
	$row ++;
	}
mysqli_close($con->conectar());
fclose($fp);
echo '<script language = javascript>
			alert("Importacion subio correctamente"); 
			self.location = "index.php";
		</script>';
	}
}

 ?>