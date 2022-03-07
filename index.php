<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content=" width=device-width, initial-scale=1.0">
		<meta name="description" content="Solid 3D es una empresa que se dedica al diseño e impresion de objetos en 3D">
		<meta name="keywords" content="Diseño 3D, Impresión 3D, Impresoras">
		<title>
			Inicio - Solid 3D
		</title>

		<link rel="shortcut icon" href="img/logo png-01.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/e254208380.js" crossorigin="anonymous"></script>  
	</head>
	<body>
		<header>
			<div class="container">
				<a href="index.html">
					<img src="img/logo png-01.png" class="logo">
				</a>
				<nav>
					<a href="#inicio">Inicio</a>
					<a href="#nosotros">Nosotros</a>
					<a href="#servicios">Servicios</a>
					<a href="#productos">Productos</a>
					<a href="#contacto">Contacto</a>
				</nav>
				<a href="#" class="hamb"><i class="fas fa-bars"></i></a>
			</div>
		</header>
		<main>
			<section id="inicio">
				<img src="img/portada.jpg">
				<div class="bloque-inicio">
					<h1>Bienvenidos a Solid 3D</h1>
					<p>
						La vida a tu medida
					</p>
					<a href="#nosotros" class="boton boton-rojo">Ver más</a>
				</div>
			</section>
			<section id="nosotros" class="seccion">
				<div class="container">
					<p>Somos estudiantes de ingeniería apasionados por el diseño y la impresión 3D.</p>
				</div>
				
			</section>
			<section id="servicios" class="seccion">
				<div class="container">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicios">
								<div class="bloque-img-servicios cuadrado-perfecto">
									<img src="img/chanchito.jpg">
								</div>
								<div class="bloque-contenido-servicios">
									<h3>Servicio 1</h3>
									<p>Llevamos tus ideas a la realidad</p>
									<a href="#" class="boton boton-verde">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicios">
								<div class="bloque-img-servicios cuadrado-perfecto">
									<img src="img/chanchito.jpg">
								</div>
								<div class="bloque-contenido-servicios">
									<h3>Servicio 2</h3>
									<p>Brindamos asesoramiento integral</p>
									<a href="#" class="boton boton-verde">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicios">
								<div class="bloque-img-servicios cuadrado-perfecto">
									<img src="img/29.jpg">
								</div>
								<div class="bloque-contenido-servicios">
									<h3>Servicio 3</h3>
									<p>Calibramos tu impresora</p>
									<a href="#" class="boton boton-verde">Ver más</a>
								</div>
							</div>		
						</div>
					</div>	
				</div>
			</section>
			<section id="productos">
				<div class="container-fluid">
					<div class="row">
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/chanchito.jpg">
								<h4>Imagen1</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/gatito.jpeg">
								<h4>Imagen2</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/celu.jpg">
								<h4>Imagen3</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/29.jpg">
								<h4>Imagen4</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/marvin.jpg">
								<h4>Imagen5</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/gatoyperro.jpg">
								<h4>Imagen6</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="contacto" class="seccion">
				<iframe width="520" height="440" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=C%C3%B3rdoba%2C%20Argentina+(Donde%20encontrarnos)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
					
				</iframe>
				<div class="container-fluid">
					<div class="row">
						<div class="columna columna-mobile-100 columna-41 empujar-58 empujar-mobile-0 sinpadding-mobile">
							<form action="index.php" method="post">
								<div class="form-block">
									<input type="text" name="nombre" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control" placeholder="E-mail" >
								</div>
								<div class="form-block">
									<textarea name="mensaje" placeholder="Mensaje">
										
									</textarea>
								</div>	
								<div class="form-block last-block">
									<input type="submit" class="boton boton-marron" value="Enviar" >
								</div>
								<?php
								    if($_SERVER["REQUEST_METHOD"] == "POST")
									{
										$nombre = $_POST["nombre"] ;
										$email = $_POST["email"] ;
										$mensaje = $_POST["mensaje"] ;

										if(isset($nombre))
								        {
											if(isset($email))
											{
												if(isset($mensaje))
												{
													$para = "correodeprueba7@gmail.com";
													$asunto = "Esto es una prueba";
													$cuerpo = $nombre."\n".$email."\n".$mensaje;
													$adicional = "From: noreply@solid3dthings.com";

													mail($para,$asunto,$cuerpo,$adicional);
												?>
												    <p>Envio exitoso</p>
												<?php
												}
											}
										}
										
									}
								?>
							</form>	
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="seccion">
			<div class="container">
				<div class="row">
					<div class="columna columna-25 columna-mobile-100">
						<img src="img/logo png-01.png" class="logo-footer">
						<p>
							Estamos para ayudarte
						</p>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Temas relacionados
						</h3>
						<ul>
							<li><a href="#">Tema 1</a></li>
							<li><a href="#">Tema 2</a></li>
							<li><a href="#">Tema 3</a></li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Datos de Contacto
						</h3>
						<ul>
							<li>solid3dthings@gmail.com</li>
							<li>+543571691492</li>
							<li>Duarte Quirós 3041, Alto Alberdi<br>Córdoba, Argentina</li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Redes Sociales
						</h3>
						<ul class="redes">
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="barra-footer">
					&copy; Todos los derechos reservados  - 2021
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>

	</body>
</html>