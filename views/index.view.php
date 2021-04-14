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
			<h1 class="titulo"> GALERIA </h1>
		</div>
	</header>

	<section class="fotos">
		<div class="contenedor">
			
			<?php foreach ($fotos as $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id']; ?>">
						<img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
					</a>					
				</div>
			<?php endforeach ?>

			<div class="paginacion">
				<?php if($pagina_actual > 1): ?>
					<a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
				<?php endif ?>

				<?php if($total_paginas != $pagina_actual): ?>
					<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
				<?php endif ?>

				<a href="subir.php" class="centro" id="submit">SUBIR FOTO</a>

				<!-- <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
				<a href="#" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a> -->
			</div>
		</div>
	</section>

	<footer>
		<p class="copyright">GALERIA CREADA POR UN CURSO PIRATA</p>
	</footer>
</body>
</html>