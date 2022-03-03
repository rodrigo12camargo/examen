<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T19</title>
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
							<h1>T19 Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.</h1>
							<span class="image main"></span>
							<h2>Conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.</h2>
							<p>Los sistemas distribuidos hay en el planeta de la informática en una u otra forma ya hace cualquier tiempo, aunque no se hayan denominado explícitamente sistemas distribuidos y no tuviesen la flexibilidad que poseen en la actualidad. La conexión de los usuarios con el ordenador central se hacía por medio de terminales tontas con conexiones punto a punto con el servidor. Ya que las terminales usadas para conectarse al ordenador central no tenían ni una capacidad de proceso, la aplicación completa se ejecutaba del todo en el ordenador central.</p>
							<p>Toda la lógica de comercio y ingreso a datos se realiza en el servidor, que en esta situación no ejecuta ni una funcionalidad relacionada con la presentación. Cada una de las funcionalidades de presentación son ejecutadas en el comprador. Un caso muestra de esta clase de aplicaciones son las aplicaciones web, las de los terminales de cajeros automáticos, etcétera.</p>
							<p>La primordial virtud es que la interfaz de cliente se ajusta bien a las habilidades del ámbito comprador (en la presentación distribuida el servidor poseía que realizar funcionalidades en un ámbito que podría no ser el más apropiado para el cliente). La primordial desventaja es que toda la información fundamental para la presentación tiene que circular por la red a partir del servidor al comprador.</p>
							<p>La lógica de los procesos se divide entre los diversos elementos del comprador y del servidor. El diseñador de la aplicación debería conceptualizar los servicios y las interfaces del sistema de información de manera que los papeles de comprador y servidor sean intercambiables, excepto en el control de los datos que es responsabilidad única del servidor. En esta clase de situaciones se plantea que hay un proceso compartido o cooperativo.</p>
							<p>La primordial virtud de esta arquitectura es que todos los nodos/servidores puede especializarse en un área definida, de manera que cada proceso se ejecutará en el nodo más apropiado. Además, tienen la posibilidad de reutilizar los sistemas ya existentes (es una especie de antesala del criterio de SOA).</p>
							<p>El comprador hace tanto las funcionalidades de presentación como los procesos. Por su lado, el servidor almacena y gestiona los datos que están en una base de datos centralizada. En este caso se plantea que existe una administración de datos remota.</p>
							<p>La primordial virtud de esta arquitectura radica en su sencillez de uso, y su proliferación al ser adaptada por idiomas de cuarta generación (como Oracle Forms). La desventaja es la latencia de red introducida. Al descargarse toda la lógica de proceso en los aplicativos consumidores, dichos requieren bajar los datos necesarios (entradas al proceso) que transitan por la red.</p>
							<p>Este modelo es parecido al de Ingreso a Datos Remoto, empero además el gestor de base de datos divide sus elementos entre el comprador y el servidor. Las interfaces entre los dos permanecen en las funcionalidades del gestor de datos y, por consiguiente, no poseen efecto en el desarrollo de las aplicaciones. </p>
							<p>Los elementos de ingreso a datos localizados en el comprador permiten independizar la base de datos del ámbito en el cual corren las aplicaciones comprador.</p>
							
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
