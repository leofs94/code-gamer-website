<?php
include('_connect.php');
$response=new stdClass();

//$datos=array();
$datos=[];
$i=0;
$sql="select * from productos_destacados";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->nombre=$row['nombre'];
	$obj->ruta_imagen=$row['ruta_imagen'];
	$obj->descripcion=$row['descripcion'];
	$obj->precio=$row['precio'];
	$datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
