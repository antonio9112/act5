<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 3 de GABRIELA POTILLO</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/video1.png" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "p5_portillo_35_php/video.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
					Las variables estáticas no son globales, es decir, su ámbito está limitado a la función. Sin embargo, el valor de dichas variables se conserva entre distintas invocaciones a la función

					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>