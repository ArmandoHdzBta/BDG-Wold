<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="../../public/css/style.css">
	<script src="https://kit.fontawesome.com/a665ad6c22.js" crossorigin="anonymous"></script>
	<title>Home</title>

</head>
<body class="bg-light">
	<!-- NAV BAR -->
	<nav class="navbar navbar-expand-sm navbar-dark bg-black ml-0 col-12 position-fixed">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><h2>BDG-World</h2></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Articulos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Cconvocatorias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contacto">Contacto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Sobre nosotros</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- COVER -->
	<div class="parallax">
		<div class="row w-100 h-100">
			<div class="align-self-center">
				<h1 class="text-center text-white">El lugar donde encontraras</h1>
				<h1 class="text-center text-white">Las mejores cosas para BDG</h1>
				<h1 class="text-center text-white">Te lo aseguramos, sino, tedevolvemos tu dinero</h1>
			</div>
		</div>
	</div>
	<!-- ARTICLES TO SELL CONTAINER -->
	<div class="container-fluid col-xxl-9 col-xl-9 col-lg-9 mt-5 bg-black" data-aos="fade-zoom-in" data-aos-delay="800">
		<h1 class="text-center text-white p-2">Articulos</h1>
		<div class="row">
			<div class="col-xxl-3 col-xl-3 col-lg-9 col-md-6 col-sm-12 ml-2 mb-3 mt-3" data-aos="fade-down" data-aos-offset="360">
				<div class="card">
					<img src="../../public/imagenes/tamborCompleto.jpg" class="card-img-top w-75 m-auto" alt="...">
					<div class="card-body">
						<h5 class="card-title">Caja completa</h5>
						<p class="card-text">Contenido: Caja reglamentaria, 1 par de baquetas, porta cajas</p>
						<a href="#" class="btn btn-primary">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-9 col-md-6 col-sm-12 ml-2 mb-3 mt-3" data-aos="fade-down" data-aos-offset="360">
				<div class="card">
					<img src="../../public/imagenes/corneta.jpg" class="card-img-top w-75 m-auto" alt="...">
					<div class="card-body">
						<h5 class="card-title">Corneta</h5>
						<p class="card-text">Corneta reglamentaria</p>
						<a href="#" class="btn btn-primary">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-9 col-md-6 col-sm-12 ml-2 mb-3 mt-3" data-aos="fade-down" data-aos-offset="360">
				<div class="card">
					<img src="../../public/imagenes/baquetas.jpg" class="card-img-top w-75 m-auto" alt="...">
					<div class="card-body">
						<h5 class="card-title">Baquetas</h5>
						<p class="card-text">Un par de baquetas reglamentarias para tambor</p>
						<a href="#" class="btn btn-primary">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-3 col-lg-9 col-md-6 col-sm-12 ml-2 mb-3 mt-3" data-aos="fade-down" data-aos-offset="360">
				<div class="card">
					<img src="../../public/imagenes/vestidura.jpg" class="card-img-top w-75 m-auto" alt="...">
					<div class="card-body">
						<h5 class="card-title">Vestidura</h5>
						<p class="card-text">Vestidura para corneta reglamentaria</p>
						<a href="#" class="btn btn-primary">Comprar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FORM CONTAINER TO ASK SOMETHING -->
	<div class="parallax2 mt-5 mb-5" id="contacto">
		<div class="container col-lg-6 mt-5 p-2 mb-5" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="1000" data-aos-offset="1" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
			<h2 class="text-center text-white p-2">¿Tienes alguna duda?. Contactanos.</h2>
			<form action="">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 form-group">
						<div class="input-group mb-3">
							<span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
							<input type="text" placeholder="Nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 form-group">
						<div class="input-group mb-3">
							<span class="input-group-text" id="inputGroup-sizing-default">Apellidos</span>
							<input type="text" placeholder="Apellido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col form-group">
						<div class="input-group mb-3">
							<span class="input-group-text" id="inputGroup-sizing-default">@</span>
							<input type="text" placeholder="Correo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col form-group">
						<div class="input-group">
							<span class="input-group-text">Mensaje</span>
							<textarea class="form-control" placeholder="Pregunta, sugerencia" aria-label="With textarea"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-12 col-xl-12 col-lg-12 d-flex justify-content-center align-items-center mt-3">
						<button type="button" class="btn btn-success">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- CONTAINER TO SHOW ALL ANNOUNCEMENT -->
	<div class="container-fluid col-lg-9 mt-5 mb-5 bg-black">
		<h1 class="text-center text-white p-2">Convocatorias</h1>
		<div class="row container-fluid d-flex justify-content-center">
			<div class="container-fluid col-xxl-3 col-xl-3 col-lg-9 col-md-6 ml-2 mb-3 mt-3 d-flex justify-content-center align-items-center" data-aos="zoom-out" data-aos-offset="360">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Calderon 2021</h5>
						<p class="card-text">Se hacerca la maas grande competencia de bandas de guerra, no te lo pierdas y participa</p>
						<a href="#" download="" class="card-link">Descargar convocatoria</a>
					</div>
				</div>
			</div>
			<div class="container-fluid col-xxl-3 col-xl-3 col-lg-9 col-md-6 ml-2 mb-3 mt-3 d-flex justify-content-center align-items-center" data-aos="zoom-out" data-aos-offset="360">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Concurso del pacifico</h5>
						<p class="card-text">No te lo pierdas y se parte del concurso del pacifico para Bandas de Guerra</p>
						<a href="#" download="" class="card-link">Descargar convocatoria</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CONTAINER TO SHOW COLABORATIONS -->
	<div class="container-fluid mb-5">
		<h1 class="text-center mb-3 p-4">Colaboracion</h1>
		<div class="row">
			<div class="col justify-content-center align-items-center d-flex">
				<img class="w-25" src="../../public/imagenes/ArticulosMilitares.png" alt="">
			</div>
			<div class="col justify-content-center align-items-center d-flex">
				<img class="w-25" src="../../public/imagenes/U_D_I.png" alt="">
			</div>
			<div class="col justify-content-center align-items-center d-flex">
				<img class="w-50" src="../../public/imagenes/ArticulosMilitaresGrove.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- FOOTER -->
	<div class="container-fluid text-primary bg-black footer">
		<div class="row row-cols-ms-3 mb-2">
			<div class="col">
				<h5 class="text-center text-white">About Us</h5>
				<p class="text-white-50 text-justify">Somos una Equipo de personas interesadas por que los jovenes se interesen por la Banda De Guerra, ademas, les tambien ponemos a su disposicion la enta de algunos articulos para Banda De guerra.</p>
				<p class="text-white-50 text-justify">Contando con la colaboracion de diversas marcas un tanto reconocidas en este medio.</p>
			</div>
			<div class="col">
				<h5 class="text-center text-white">Productos</h5>
				<p class="text-white-50">Accesorios</p>
				<p class="text-white-50">Instrumentos</p>
				<p class="text-white-50">Piezas de armando</p>
				<p class="text-white-50">Ropa</p>
				<p class="text-white">Convocatorias</p>
			</div>
			<div class="col">
				<div class="row">
					<h3 class="text-center text-white">Direccion</h3>
				</div>
				<div class="row">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.2017241388157!2d-99.13271458578139!3d19.44686764526506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f93a402bd695%3A0xd8e4c49639df49f1!2sJes%C3%BAs%20Carranza%2C%20Tepito%2C%20Morelos%2C%20Cuauht%C3%A9moc%2C%2006200%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1614363380217!5m2!1ses-419!2smx" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col d-flex justify-content-between">
				<div class="row social-media">
					<div class="col"><a href="#" class="text-white"><i class="fab fa-facebook"></i></a></div>
					<div class="col"><a href="#" class="text-white"><i class="fab fa-instagram"></i></a></div>
					<div class="col"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></div>
				</div>
				<p class="text-center text-white">&copy; Todos los derechos de autor recervados, <b>2021</b></p>
			</div>
		</div>
	</div>

	<!-- SCRIPTS BOOTSTRAP -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	<!-- ANIMATION SCRIPT -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>