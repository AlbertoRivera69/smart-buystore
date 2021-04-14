<?php 
require 'funciones.php';
$conexion = conexion('galeria', 'root', '');


if (!$conexion) {
	die();
}
 $error = '';
# La variable $_FILES devuelve:
// Array
// (
//     [foto] => Array
//         (
//             [name] => 13.jpg
//             [type] => image/jpeg
//             [tmp_name] => D:\XAMPP\tmp\php82BD.tmp
//             [error] => 0
//             [size] => 134924
//         )
// )

if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_FILES)) {
	//getimage Nos pide el nombre del archivo y checa si es imagen 
	print_r(@getimagesize($_FILES['foto']['tmp_name']));
	$check = @getimagesize($_FILES['foto']['tmp_name']);
	if ($check != false) {
		$carpeta_destino = 'fotos/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

		$statement = $conexion->prepare('
			INSERT INTO fotos (titulo, imagen, texto)
			VALUES (:titulo, :imagen, :texto)
		');

		$statement->execute(array(
			':titulo' => $_POST['titulo'],
			':imagen' => $_FILES['foto']['name'],
			':texto' => $_POST['texto']
		));

		header('Location: index.php');
	} else {
		$error = "El archivo no es una imagen o hubo un error";
	}
} else {
	$error = " El archivo no es una imagen o hubo un error";
}


require 'views/subir.view.php';

?>