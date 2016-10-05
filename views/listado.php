<?php 
	session_start();
	//recuperar los datos de la variable de sesion
	if(isset($_SESSION["sdata"])){ //¿Existe la variable de sesion?
		$data=$_SESSION["sdata"];//Recuperamos los datos de sesion
		unset($_SESSION["sdata"]);//destruir la variable sesion
	}
	include 'header.php';
 ?>
 
			<ul class="listado">
				<li>
					<h3>Ingreso de Datos</h3>
				</li>
				<li>
					<label>Código:</label>
				</li>				
				<li>
					<label>Apellidos:</label>
				</li>
				<li>
					<label>Nombres:</label>
				</li>
				<li>
					<label>Fecha de Nacimiento:</label>
				</li>
				<li>
					<label>Sueldo:</label>
				</li><br>
				<?php 
					for ($i=0; $i < count($data) ; $i++) { ?>
					<li><?php print $data[$i][0];?></li>
					<li><?php print $data[$i][1];?></li>
					<li><?php print $data[$i][2];?></li>
					<li><?php print $data[$i][3];?></li>
					<li><?php print $data[$i][4];?><br></li>
				<?php } ?>
																			
			</ul>

<?php include 'footer.php'; ?>
 