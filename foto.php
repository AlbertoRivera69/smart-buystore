<?php 

require 'funciones.php';
$conexion = conexion('galeria', 'root', '');

if (!$conexion) {
	die();
}

// Si ID esta seteado me lo guardas si no, le asignas false.
$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

// si ID es falso
if (!$id) {
	header('Location: index.php');
}

$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$statement->execute(array(':id' => $id));

$foto = $statement->fetch();

// Si no hay foto
if (!$foto) {
	header('Location: index.php');
}

require "views/foto.view.php";

?>
