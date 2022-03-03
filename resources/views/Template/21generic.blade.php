<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T21</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"></span><span class="title"></span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="{{('inicio')}}">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{('inicio')}}">Home</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>T21 Explicar el proceso de diseño de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación</h1>
							<span class="image main"></span>
							<p>Capa de presentación: la que ve el cliente (también se la llama «capa de usuario»), muestra el sistema al cliente, le comunica la información y captura la información del cliente en un mínimo de proceso (realiza un filtrado anterior para verificar que no hay errores de formato). Esta capa se comunica solamente con la capa de comercio. </p>
							<p>Capa de comercio: es donde residen los programas que se ejecutan, se reciben las pedidos del cliente y se envían las respuestas tras el proceso. Esta capa se comunica con la capa de presentación, para recibir las demandas y exponer los resultados, y con la capa de datos, para pedir al gestor de base de datos guardar o recobrar datos de él.</p>
							<p>Está formada por uno o más gestores de bases de datos que hacen todo el almacenamiento de datos, reciben demandas de almacenamiento o recuperación de información a partir de la capa de comercio. </p>
							<p>Las capas de comercio y de datos tienen la posibilidad de residir en el mismo ordenador, y si el incremento de las necesidades lo aconseja tienen la posibilidad de dividir en 2 o más pcs. De esta forma, si la magnitud o dificultad de la base de datos se incrementa, se puede dividir en diversos pcs los cuales recibirán las pedidos del ordenador en que resida la capa de comercio. </p>
							<p>Si, por otro lado, fuese la dificultad en la capa de comercio lo cual obligase a la división, esta capa de comercio podría residir en uno o más pcs que realizarían demandas a una exclusiva base de datos. En sistemas bastante complicados se llega a tener una secuencia de pcs sobre los cuales corre la capa de comercio, y otra serie de computadoras sobre los cuales corre la base de datos. </p>
							<p>El término «capa» hace referencia a la forma como una solución es segmentada desde el punto de vista lógico:</p>
							<p>-    Presentación. (Conocida como capa web en aplicaciones web o como capa de usuario en aplicaciones nativas)</p>
							<p>-	Lógica de negocio. (Conocida como capa aplicativa)</p>
							<p>-	Datos. (Conocida como capa de base de datos)</p>
							<p>En cambio, el término «nivel» corresponde a la forma en que las capas lógicas se encuentran distribuidas de forma física. Por ejemplo:</p>
							<p>Una solución de 3 capas (presentación, lógica del comercio, datos) que residen en un solo ordenador (Presentación+lógica+datos). </p>
							<p>Una solución de 3 capas (presentación, lógica del comercio, datos) que residen en 2 pcs (Presentación+lógica por un lado; lógica+datos por el otro lado).</p>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>
