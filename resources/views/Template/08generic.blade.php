<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T8</title>
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
							<h1>T8 Clasificación de los sistemas de información de acuerdo a su arquitectura</h1>
							<span class="image main"></span>
							<h2>1. Monopuesto – Monousuario.</h2>
							<p>Aunque es muy obvio, lo incluyo como primer tipo porque me preguntan con cierta frecuencia si instalar mi programa de gestión documental (ArchivaTech) para tener en casa, para un único ordenador. </p>
							<h2>2. Cliente-Servidor.</h2>
							<p>Este es el caso más corriente en PYMES. Hay un «ordenador central», un servidor, en el que se almacenan todos los documentos (archivos) y 5, 10…25 usuarios acceden desde sus ordenadores, conectados en red local, a consultar y añadir documentos a la base de datos común. En el servidor debe haber un gestor de base de datos, como Oracle, SQL Server, MySQL o algún otro. Este gestor aporta robustez al archivo, seguridad en el acceso y permite búsquedas rápidas por cualquier dato. En los puestos de trabajo hay instalado un programa de gestión documental, lo que se llama un «software cliente», que facilita el acceso a los datos y su gestión: búsquedas, clasificación, añadir datos complementarios…</p>
							<h2>3. Servidor-Clientes Web.</h2>
							<p>Podemos considerar esta opción una evolución de la anterior que solo se distingue porque en los puestos de trabajo no hay que instarla un «software cliente» específico para acceder a los datos sino que se utiliza un simple navegador Web (Internet Explorer, FireFox, Chrome o Safari) que suele estar instalado en todos los ordenadores. Esto simplifica sensiblemente la instalación inicial del sistema aunque tiene una pega: suele ser menos cómodo y ágil que los programas específicos diseñados expresamente (es un tema que he tratado ampliamente en posts anteriores). Para docenas o cientos de usuarios suele ser la mejor opción.</p>
							<h2>4. Cliente-Servidor + Clientes Web.</h2>
							<p>Una arquitectura mixta que suma lo mejor de las dos anteriores. Tenemos un servidor con los datos, algunos usuarios acceden con software específico y el resto con un navegador Web. Permite la instalación de un software específico, potente y ágil, para los usuarios que utilizan frecuentemente el software de gestión y proporciona acceso a docenas o cientos de usuarios esporádicos sin necesidad de instalar el programa en cada uno de esos cientos de ordenadores. </p>
							<h2>5. Cliente-Servidor + Clientes Web + Acceso remoto.</h2>
							<p>Es una evolución de la anterior a la que se suma el acceso desde el exterior (Internet) utilizando portátiles, tabletas (iPad), teléfonos móviles o simplemente un ordenador conectado a Internet. En estos dispositivos que no están conectados directamente a la red local de la empresa se utiliza el navegador para acceder a la base de datos de documentos usando la dirección IP de un servidor situado en la empresa. Es una opción que cada vez más usuarios demandan (aunque alguno no quiere ni oir hablar de la posibilidad de que se accedan a sus datos desde Internet).</p>
							<h2>6. Oficinas interconectadas en modo Cliente-Servidor + Cliente Web.</h2>
							<p>Si la empresa tiene varias oficinas en localizaciones distintas (en la misma ciudad o en cualquier lugar del mundo), puede utilizar la infraestructura anterior para conectarse, no solo desde dispositivos móviles, sino desde las redes locales de cualquier oficina al servidor «central» en el que están los datos.</p>
							<h2>7. Cloud Computing.</h2>
							<p>Es una variante de cualquiera de los casos anteriores, pero con el servidor «en la nube» en lugar de estar físicamente en la oficina de la empresa. Ya no hablamos de servidor en red local, sino de servidor «remoto», aunque para los usuarios debe ser indiferente que el servidor esté en la habitación de al lado o en un CPD (centro de proceso de datos) de Irlanda. Tiene un gran atractivo porque la empresa se desentiende del mantenimiento del servidor, incluyendo su ampliación si se queda pequeño, pero tiene un gran problema para sistemas de gestión documental: el ancho de banda. Los usuarios dependen completamente de la velocidad de su conexión a Internet para consultar archivos y añadir nuevos. Y algunos archivos pueden ser bastante «pesados». Para PYMES con una sola oficina no parece justificada esta dependencia absoluta de la conexión a Internet, frente a la velocidad que proporciona una conexión en red local al servidor situado en la habitación contigua.</p>
							
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