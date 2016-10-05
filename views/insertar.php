<?php include 'header.php'; ?>

	<section>
		<form method="post" action="../controller/archivoController.php">
			<ul>
				<li>
					<h3>Ingreso de Datos</h3>
				</li>
				<li>
					<input type="hidden" name="peticion" value="insertar">
				</li>
				<li>
					<label>Código:</label>
					<input type="text" name="datos[]">
				</li>				
				<li>
					<label>Apellidos:</label>
					<input type="text" name="datos[]">
				</li>
				<li>
					<label>Nombres:</label>
					<input type="text" name="datos[]">
				</li>
				<li>
					<label>Fecha de Nacimiento:</label>
					<input type="text" name="datos[]">
				</li>
				<li>
					<label>Sueldo:</label>
					<input type="number" name="datos[]">
				</li>
				<li>
					<input class="boton" type="submit" name="btnEnviar" value="Enviar">
				</li>
																				
			</ul>
		</form>
	</section>

<?php include 'footer.php'; ?>

</body>
</html>