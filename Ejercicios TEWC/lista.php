<?php
require_once 'conectar.php';
$sql = "SELECT tipo, descripcion, ubicacion, nombre, email FROM proyectos LIMIT 6";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
	print_r($fila);
}
?>
