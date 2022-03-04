<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>T27</title>
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
							<h1>T27 Reconocer los conceptos de modelo, control, y vista en las arquitecturas cliente/servidor</h1>
							<span class="image main"></span>
							<h1>modelo</h1>
							<p>Es la representación específica de la información con la cual el sistema opera. La lógica de datos garantiza la totalidad de dichos y posibilita derivar nuevos datos; ejemplificando, no permitiendo mercar un número de unidades negativo, o calculando los totales e impuestos del carrito de compra. Esto significa que aquí se operan los datos y las normas de comercio relacionadas al sistema, incluyendo el estudio sintáctico y el procesamiento de los datos de acceso y de los datos de salida.</p>
							<h2>El modelo es el responsale de: </h2>
							<p>-	Entrar a la capa de almacenamiento de datos. Lo ideal es que el modelo sea sin dependencia del sistema de almacenamiento.</p>
							<p>-	 Define las normas de comercio (la funcionalidad del sistema). Un caso muestra de regla podría ser: “Si la mercancía pedida no está en el depósito, consultar la época de entrega estándar del proveedor”.</p>
							<p>-	 Lleva un registro de las vistas y controladores del sistema.</p>
							<p>-	Si estamos frente a un modelo activo, notificará a las vistas los cambios que en los datos logre crear un mánager externo (por ejemplo, un fichero batch que actualiza los datos, un temporizador que desencadena una inserción, etcétera.). Una ejemplificación de MVC con un modelo pasivo (aquel que no notifica cambios en los datos) es la navegación web, que responde a las entradas del cliente, sin embargo no detecta los cambios en datos del servidor.</p>
							<h1>Vista</h1>
							<p>Este muestra, cmounmente la interfaz cliente servidor. La vista es la capa de la aplicacion que ve el cliente en un formato conveniente para interactuar, en otros terminos, es nuestra interfase grafica</p>
							<h2>La vista es el responsable de: </h2> 
							<p>-	 Recibir datos del modelo y los muestra al cliente.</p>
							<p>-	 Poseen un registro de su controlador asociado (normalmente pues además lo instancia).</p>
							<p>-	Tienen la posibilidad de ofrecer el servicio de “Actualización”, para que sea invocado por el controlador o por el modelo (cuando es un modelo activo que informa de los cambios en los datos realizados por otros agentes).</p>
							<h1>Controlador</h1>
							<p> El Controlador es la capa que controla todo lo cual puede hacer nuestra aplicación. Responde a eventos, comúnmente ocupaciones del cliente e invoca cambios en el modelo y posiblemente en la vista. Está formado por ocupaciones que se representan con funcionalidades en una clase. Ejemplificando, yo tengo mi controlador denominado “Clientes”, y este controlador puede hacer las actividades “Crear”,”Editar”,”Listar” entre otras.</p>
							<h2>El controlador es responsable de:</h2>
							<p>-	Obtiene los eventos de ingreso (un clic, un cambio en un campo de escrito, etcétera.).</p>
							<p>-	Tiene normas de administración de eventos, del tipo “SI Acontecimiento Z, entonces Acción W”. Estas ocupaciones tienen la posibilidad de dar por sentado demandas al modelo o a las vistas. Una de estas pedidos a las vistas podría ser una llamada al procedimiento “Actualizar()”. Una demanda al modelo podría ser “Obtener_tiempo_de_entrega( nueva_orden_de_venta )”.</p>
							
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
