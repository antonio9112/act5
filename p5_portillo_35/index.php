<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
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
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>P1 preguntas y Respuestas</h4>
				
				<p>
			que es for?
			Un for en programación se usa cuando queremos repetir un conjunto de instrucciones un número finito de veces.

Vamos a ver que significa esto… En programación existen los bucles, como puede ser escribir con while o for.
				</p>
				<h4>Conclusiones </h4>
				<p>
				El bucle for o ciclo for es una estructura de control en programación en la que se puede indicar de antemano el número mínimo de iteraciones que la instrucción realizará. Está disponible en casi todos los lenguajes de programación imperativos.

				</p>
				<figure>
					<img src="imagenes/222.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4>
				<p>que es aritmeticos?
				Estos operadores nos permiten realizar operaciones aritméticas: suma, resta, multiplicación, división, etc. así como obtener el módulo o resto de una división entre dos enteros.
				</p>
				<h4>Conclusiones </h4>
				<p>
				Los operadores Aritméticos toman valores numéricos (ya sean literales o variables) como sus operandos y retornan un valor numérico único. Los operadores aritméticos estándar son adición o suma (+), sustracción o resta (-), multiplicación (*), y división (/).
				</p>
				<figure>
					<img src="imagenes/333.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4>
				<p>
				que es expresiones regulares?
				Las expresiones regulares permiten definir patrones de coincidencia y aplicarlas a cadenas de texto para saber si la cadena (o parte de ella) cumple el patrón e incluso realizar transformaciones de la cadena.
				
				</p>
				<h4>Conclusiones </h4>
				<p>
				Las expresiones regulares son usadas para realizar búsquedas avanzadas y reemplazar texto en una cadena de caracteres utilizando un patrón de caracteres.

Lo primero que debes saber es que en el lenguaje PHP existen dos tipos de funciones de expresiones regulares y que ambas usan una síntaxis algo diferente: las funciones POSIX (que han quedado obsoletas< desde la versión de PHP 5.3.0, por lo que no se recomienda su uso) y las funciones PCRE (Perl Compatible Regex library) compatibles con el lenguaje Perl.

				</p>
				<figure>
					<img src="imagenes/papa1.png" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>