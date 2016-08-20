 <?php
require_once 'conexion.php';
$n= "hector";
$p= "nasus";
$Nombre = $_GET['Nombre'];

$Password = $_GET['Password'];

if ($Nombre == $n and $Password == $p)
{
echo "Usuario:  ";
echo $Nombre;
echo nl2br(" \n ");
echo nl2br(" \n ");
$cone = new conexion();
require_once 'formulario.php';
}

else {
echo "usuario o contraseña incorrectos";
}

?>
