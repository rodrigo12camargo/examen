<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T24</title>
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
							<h1>T24 Explicar el proceso de planificación en dos niveles.</h1>
							<span class="image main"></span>
							<p>Se carga en la memoria principal cierto subconjunto de los procesos ejecutables. El planificador se restringe entonces a ese subconjunto durante cierto tiempo. Se eliminan de la memoria los procesos que hayan permanecido en ella lo suficiente y manda a cargar a memoria los procesos que hayan estado en disco demasiado tiempo.</p>
							<h3>Planificador de alto nivel</h3>
							<p>Se encarga de llevar procesos de disco a memoria y viceversa</p>
							<h3>Planificador de bajo nivel</h3>
							<p>Se encarga de pasar de un proceso a otro en memoria principal</p>
							<p>Varios criterios</p>
							<p>- Tiempo en memoria</p>
							<p>- Tiempo de procesador</p>
							<p>- Prioridad</p>
							<p>- Tamaño.</p>
							<p>Los esquemas analizados hasta ahora suponen que todos los procesos ejecutables permanecen en la memoria primaria.</p>
							<p>Si la memoria primaria es insuficiente, ocurrirá lo próximo</p>
							<p> • Habrá procesos ejecutables que se mantengan en disco.</p>
							<p> • Habrá relevantes repercusiones para la idealización, como por ejemplo las próximas:</p>
							<p> • La época de alternancia entre procesos para traer y procesar un proceso del disco es de manera considerable más grande que la era para un proceso que ya está en la memoria primaria</p>
							<p> • Es más eficiente el trueque de los procesos con un planificador de 2 niveles. </p>
							<h3>El esquema operativo de un planificador de dos niveles es:</h3>
							<p>1. Se carga en la memoria primaria cierto subconjunto de los procesos ejecutables.</p>
							<p>2. El planificador se restringe a ellos a lo largo de cierto tiempo.</p>
							<p>3. Periódicamente se denomina a un planificador de grado preeminente para realizar las próximas labores</p>
							<p>- Borrar de la memoria los procesos que hayan permanecido en ella la era suficiente.</p>
							<p>- Cargar a memoria los procesos que hayan estado en disco bastante tiempo. </p>
							<p>4. El planificador de grado inferior se restringe otra vez a los procesos ejecutables que estén en la memoria.</p>
							<p>5. El planificador de grado preeminente se ocupa de mover los procesos de memoria a disco y al revés.</p>							
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
