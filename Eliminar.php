<?php

include "conexion.php";
$Id=$_POST["ID"];

$sql="DELETE FROM servicios where Id_Servicios=$Id";
$result=mysqli_query($conn,$sql);

if($result){
	echo "El registro fue eliminado correctamente";
}else{
	echo "No se encontro ningun registro con ese identificador:".mysqli_error();
}
mysqli_close($conn);
?>