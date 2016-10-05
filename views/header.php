<!DOCTYPE html>
<html>
<head>
	<title>Semana 2</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/listado.css">
	<meta charset="utf-8">
</head>
<script language="javascript">
	function insertar(){
		location.href="insertar.php";
	}
	function listado(){
		location.href="../controller/archivoController.php?peticion=listado";
	}
</script>
<body>
	<header>
		<div>
			<h1>Taller de Programación Web</h1>
			<p>6to. Ciclo - Computación e Infomática</p>
		</div>
		<div>
			<img src="../images/logo-seoane.png" alt="Logotio del Instituto Seoane">
			<p>Capacidad para crear e innovar...</p>
		</div>
	</header>
	<nav>
		<a href="index.php">Inicio</a>
		<a href="#" onclick="insertar()">Insertar</a>
		<a href="#" onclick="listado()">Listado</a>
		<a href="#">Contacto</a>
	</nav>
 </body>
 </html>	