<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Canciones</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="{{route('inicio.artistas')}}" class="logo"><strong>El rincon</strong> <span>del artista</span></a>
						<nav>
							<a href="#menu">Menú</a>
						</nav>
					</header>

				<!-- Menu -->
				<nav id="menu">
						<ul class="links">
							<li><a href="{{route('inicio.artistas')}}">Inicio</a></li>
							<li><a href="{{route('ver.cancion')}}">Canciones</a></li>
							<li><a href="{{route('ver.letra')}}">Letra</a></li>
							<li><a href="#footer">Contacto</a></li>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Repertorio de canciones</h1>
							</header>
							<div class="content">
								<p>Aquí podrás encontrar información de las canciones de tus artistas favoritos.</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							

						<!-- Two -->
						
							<section id="two" class="spotlights">
							@foreach($can as $cancion)
								<section>
									<a href="" class="image">
										<img src="{{$cancion['portada']}}" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>{{$cancion['titulo']}}</h3>
											</header>
											<p>Duracion: {{$cancion['duracion']}}</p>
											<p>{{$cancion['link']}}</p>
											<ul class="actions">
												<li><a href="{{route('ver.letra')}}" class="button">Ver letras</a></li>
											</ul>
										</div>
									</div>
								</section>
								@endforeach
							</section>
						

						<!-- Three -->
							

					</div>

				<!-- Contact -->
				<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="mailto:cesaryairlopez48@gmail.com">
									<div class="fields">
										<div class="field half">
											<label for="name">Nombre</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Mensaje</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar Mensaje" class="primary" /></li>
										<li><input type="reset" value="Limpiar" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">cesar_1320114045@uptecamac.edu.mx</a>
										<a href="#">bautista_1320114018@uptecamac.edu.mx</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Teléfono</h3>
										<span>(52) 5585281986 </span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Dirección</h3>
										<span>Prolongación 5 de Mayo #10<br />
										Colonia Felipe Villanueva, Centro Tecámac,<br />
										CP 55740, Estado de México  </span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
				<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://twitter.com/laravelphp" target="_blank" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/UniversidadPolitecnicadeTecamac" target="_blank" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/anuel/" target="_blank" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://github.com/YairMex/lopez_lopez_yair_Unidad3" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; El rincon del artista</li><li>Design: <a href="https://segundoblog.herokuapp.com/" target="_blank">BVLLS W3B &copy;</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>