<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T20</title>
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
										<li><a href="{{('/')}}">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{('/')}}">Home</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>T20 Definir los conceptos de lógica de acceso, presentación y negocio a datos.</h1>
							<span class="image main"></span>
							<h2>Conceptos de lógica de acceso, presentación y negocio a datos.</h2>
							<h3>Conceptos de lógica de acceso.</h3>							
							<p>Esta lógica es la responsable del control de todos los puntos involucrados con la relación entre el cliente y la aplicación. Para realizar esta labor de control, se necesita conocer qué tipos de usuarios usarán la aplicación, qué ocupaciones deben hacer y, teniendo en cuenta dichos datos, cuáles son los superiores estilos de interfaz para que aquellos usuarios realicen sus labores. En esta lógica se engloban cada una de las labores que tienen que ser llevadas a cabo por la parte Cliente del modelo general.</p>
							<p>Para independizar (en el tamaño de lo posible) la interfaz de cliente de las propiedades propias de los procesos, debemos tener en cuenta que la codificación de las labores relacionadas a esta lógica radica, primordialmente, en la llamada a procesos independientes situados en las demás lógicas, cuya ejecución es plenamente transparente.</p>
							<p>Si en la capa que implementa la lógica de presentación no integramos lógica del comercio ni accesos directos a datos, conseguiremos que esta capa sea inmune a los cambios introducidos en los métodos de la organización, así como a los cambios de los sistemas de administración de datos usados.</p>
							<h3>Lógica de Negocio </h3>
							<p>Es la lógica de la aplicación que controla la sucesión de actividades y fuerza el cumplimiento de las normas del comercio propias de cada empresa; además, garantiza la totalidad de las transacciones de las operaciones necesarias que haya que realizar para que se cumplan dichas reglas.</p>
							<p>La lógica del comercio además transforma una secuencia de datos en información eficaz para el cliente por medio de la aplicación de las normas apropiadas. </p>
							<p>La finalidad que debería consumar esta lógica es el de aislar las normas del comercio, así como las transformaciones de datos de los clientes (usuarios y otros elementos de esta misma).</p>
							<p>● Flexibilidad en el momento de dictaminar cómo y dónde colocar el código de esta lógica: en  dentro del sistema gestor de datos; o inclusive en el comprador. </p>
							<p>● La destreza de poner diversas interfaces de cliente para un mismo grupo estándar.</p>
							<p>● Permite el mantenimiento de las normas del comercio y de su lógica, aislando los cambios de las interfaces de los usuarios y de los datos. </p>
							<p></p>
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
