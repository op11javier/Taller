
<?php
require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

$id = $_GET['id_demo'];

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Borrar Demo</title>       
	</head>
    <body style="padding:15px;">

 
                 <?php  $model->DeleteDEMO($id);?>
              
 
    </body>
</html>
