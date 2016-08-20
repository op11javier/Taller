<?php
require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

$id = $_POST['id_demo'];
$demo = $_POST['demo'];

{

}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>inicio</title>       
	</head>
    <body style="padding:15px;">

    
	<?php 
	
	  move_uploaded_file($tmp_name, "$directorio/$nombre");

		$cadena = "insert into demo(id_demo,nombre) values(".$id. ",'".$demo."','".$nombre. "')";
		echo $cadena;
		$model->InsertDEMO($cadena);
		echo "se inserto registro";
	?>
		

    </body>
</html>
