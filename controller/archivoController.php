<?php 
	//Habilitar el uso de una variable de sesión
	session_start();
	require_once "../model/archivoModel.php";
	//capturar el requerimiento de la vista (views)
	$opcion=$_REQUEST["peticion"];
	//Captura el valor de las cajas de texto
	$datos=$_POST["datos"];
	//Instanciar a la clase Model
	$am=new archivoModel();

	if($opcion=="listado"){
		$data=$am->listado(); //Invocar al método listado
	}
	if($opcion=="insertar"){
		$am->insertar($datos); //Invocar al método insertar
		$data=$am->listado(); //Invocar al método listado
	}
	//Guardar ls respuesta e una variable de sesion
	$_SESSION["sdata"]=$data;
	//regresar al viw
	header("location: ../views/listado.php");
 ?>