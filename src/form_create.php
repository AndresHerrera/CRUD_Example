<?php
/*
================================
Este archivo muestra un formulario que
se envía a create_Edificio.php, el cual guardará
los datos
================================
*/
?>

<div class="row">
	<div class="col-12">
		<h1>CREAR nuevo Edificio</h1>
		<form action="create.php" method="POST">
			<div>
				<label for="nombre">Nombre Edificio:</label>
				<input required name="nombre" type="text" id="nombre" placeholder="Nombre del Edificio">
			</div>
<br>
			<div>
				<label for="codigo">Codigo Edificio:</label>
				<input required name="codigo" type="number" id="codigo" placeholder="Codigo del Edificio">
			</div>
			<br>
			<button type="submit">Crear Edificio</button>
			<br><br>
			<!-- Enlace a listado de Edificios -->
			<a href="../menu_principal.php">Volver al listado de opciones CRUD</a>
		</form>
	</div>
</div>
