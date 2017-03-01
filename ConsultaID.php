<?php

include "conexion.php";
$Id=$_POST["ID"];

$sql="SELECT * FROM servicios where Id_Servicios=$Id";
$result=mysqli_query($conn,$sql);
$datos= array();
if($result){
$i=0;
while($fila=mysqli_fetch_assoc($result)){
	$datos[$i]=$fila;
	$i=$i+1;
	}
}else{
	echo "No se encontro ningun registro con ese identificador:".mysqli_error();
}
mysqli_close($conn);
echo json_encode($datos);
?>