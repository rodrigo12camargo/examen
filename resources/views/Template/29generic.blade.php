<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T29</title>
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
						<h1>T29 Explicar el proceso de flujo de control apartir de MVC,en las arquitecturas Cliente/Servidor</h1>
							<span class="image main"></span>
							<p>1. El usuario interactúa de alguna manera con la interfaz de usuario (por ejemplo, al hacer clic en botones, enlaces, etc.)</p>
							<p>2. El controlador (a través del objeto de interfaz de vista) recibe notificaciones sobre las acciones solicitadas por el usuario. Los controladores manejan los eventos entrantes, generalmente a través de controladores de eventos o devoluciones de llamada.</p>
							<p>3. El controlador accede al modelo, lo actualiza y puede modificarlo según la acción solicitada por el usuario (por ejemplo, un controlador que actualiza el carrito del usuario). Los controladores complejos a menudo se construyen utilizando patrones de comando que encapsulan acciones y las hacen fácilmente extensibles.</p>
							<p>4. El controlador delega la tarea de representar la interfaz de usuario en el objeto de vista. La vista recupera datos del modelo y crea una interfaz fácil de usar donde los cambios se reflejan en el modelo (por ejemplo, genera una lista del contenido de la cesta). </p>
							<p>5. La interfaz de usuario espera nuevas interacciones del usuario, comenzando el ciclo nuevamente.</p>
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
