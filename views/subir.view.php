<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo"> Subir foto </h1>
		</div>
	</header>

	<div class="contenedor">
		<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<label for="foto">Selecciona tu foto</label>
			<input type="file" id="foto" name="foto">

			<label for="titulo">Titulo de la foto</label>
			<input type="text" id="titulo" name="titulo">

			<label for="texto">Descripccion: </label>
			<textarea name="texto" id="texto" placeholder="Ingresa una breve descripccion"></textarea>

			
			<?php if(empty($error)): ?>
				<p class="error"> <?php echo $error; ?></p> 
			<?php endif ?>

			<input type="submit" class="submit" value="Subir foto" name="">
			<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>

 		</form>
	</div>

	<footer>
		<p class="copyright">GALERIA CREADA POR UN CURSO PIRATA</p>
	</footer>
</body>
</html>