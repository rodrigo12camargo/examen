<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T22</title>
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
							<h1>T22 Explicar el proceso de desarrollo de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación.</h1>
							<span class="image main"></span>
							<h2>Proceso de desarrollo de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación.</h2>
							<h3>Nivel de presentación</h3>
							<p>El grado de presentación es la interfaz de cliente y de comunicación de la aplicación, donde el cliente final interactúa con la aplicación. Este primer grado se puede llevar a cabo en un navegador web como una aplicación de desktop o una interfaz gráfica de cliente (GUI).</p>
							<h3>Nivel de aplicacion</h3>
							<p>El grado de aplicación, además conocido como el grado lógico o medio, es el núcleo de la aplicación. En este grado, se procesa la información recopilada en el grado de presentación, algunas veces con otra información en el grado de datos, por medio de la lógica empresarial; un grupo específico de normas empresariales. </p>
							<p>1. El modelo de programación de EJB (Enterprise JavaBeans ) da diversos tipos de elementos del lado del servidor diversos: entidad, sesión y beans controlados por mensajes y servlets. De dichos tipos, los beans de entidad se aplican comúnmente para modelar elementos de comercio en una aplicación. Los beans de entidad poseen estado y comportamiento.</p>
							<p>El estado de los beans de entidad es persistente y se almacena en una base de datos. Mientras se hacen cambios en un bean de entidad, su estado se conserva en sincronización con el registro de base de datos que representa el bean. Hay 2 tipos de beans de entidad proporcionados por el modelo EJB y dichos 2 tipos difieren en el mecanismo usado para dar persistencia. Dichos 2 tipos de beans de entidad son beans persistencia gestionada por contenedor (CMP) y beans persistencia gestionada por bean (BMP).</p>
							<p>Con los beans BMP, el inventor genera manualmente código para gestionar el estado persistente del bean.</p>
							<p>Con los beans CMP, el contenedor EJB gestiona el estado persistente del bean. La administración de estado persistente es una labor compleja y difícil; la utilización de beans CMP posibilita al creador concentrarse en la lógica empresarial encargando la conducta de persistencia en el contenedor.</p>
							<p>Ejemplos clásicos de beans CMP son Comprador, Cuenta, etcétera. Pues los beans CMP son objetos, se accede a sus datos (estado) por medio de descriptores de ingreso de campo. Ejemplificando, es posible que un bean de entidad Comprador tenga campos como Nombre y phoneNumber. Se accede a dichos datos usando los procedimientos de accesor getName () /setName () y getPhoneNumber () /setPhoneNumber (). Como creador, no le preocupa cómo dichos datos se almacenan y recuperan al final de la base de datos de fondo y tienen la posibilidad de dar por sentado que el contenedor preserva la totalidad de los datos.</p>
							<p>2. Busque un origen de datos o una fábrica de conexiones usando una alusión de recurso. Consulte el asunto Buscar inicios de datos con referencias de recursos para la entrada relacional para obtener más información. </p>
							<p>Para llevar a cabo aplicaciones en WebSphere Application Server, el código debería usar referencias de recursos a inicios de datos o fábricas de conexiones con nombre lógico. La correlación de las referencias de recursos con los recursos reales se hace comúnmente en el instante del ensamblaje. El administrador del servidor de aplicaciones configura aquellos recursos. </p>
							<p>Para la entrada a bases de datos relacionales, los administradores configuran un distribuidor JDBC y inicios de datos asociados, que funcionan con el WebSphere Relational Resource Adapter incorporado. </p>
							<p>Para la entrada a bases de datos no relacionales, los administradores instalan un adaptador de recursos JCA ( Java Platform, Enterprise Edition) Connector Architecture (Java ) en un servidor de aplicaciones y configuran fábricas de conexiones relacionadas. </p>
							<p>La utilización de entorno de trabajo genérico otorga un mecanismo para que un adaptador de recursos controle los entornos en los cuales se ejecutan instancias de trabajo enviadas por el adaptador de recursos al gestor de trabajo del producto para su ejecución. </p>
							<p>3. Obtenga una conexión con un origen de datos o una fábrica de conexiones. </p>
							<p>4.  Utilice la identidad de hebra para asignar un propietario a la conexión. Consulte el tema Utilización de la identidad de hebra, soporte para obtener más información.</p>
							<h3>Nivel de datos </h3>
							<p>El grado de datos, algunas veces nombrado grado de base de datos, grado de ingreso a datos o backend, es donde se almacena y gestiona la información procesada por la aplicación.</p>
							
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
