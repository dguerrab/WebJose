<?php
require_once 'conectar.php';

$sql = "SELECT tipo, descripcion, ubicacion, nombre, imagen, email FROM proyectos LIMIT 8";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
	$filas[] = array(
			"tipo" => $fila['tipo'],
	        "descripcion" => $fila['descripcion'],
	        "ubicacion" => $fila['ubicacion'],
			"nombre" => $fila['nombre'],
	        "imagen" => $fila['imagen'],
			"email" => $fila['email']);
}

$json = json_encode($filas); 
$callback = $_GET['callback'];
echo $callback.'('. $json . ')';
?>

