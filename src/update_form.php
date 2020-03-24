<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */
 
if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "config.php";

$sql = $databasePDO->prepare("SELECT id, nombre, codigo FROM edificios_crud WHERE id = ?;");
$sql->execute([$id]);

$edifico = $sql->fetchObject();

if (!$edifico) {
    #No existe
    echo "¡No existe algun Edificio con ese ID!";
    exit();
}
#Si la mascota existe, se ejecuta esta parte del código
?>


<div>
	<div>
		<h1>Actualizar Edificio</h1>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $edifico->id; ?>">
			<div class="form-group">
				<label for="nombre">Nombre Edifico</label>
				<input value="<?php echo $edifico->nombre; ?>" required name="nombre" type="text" id="nombre" placeholder="Nombre del Edificio" >
			</div>
			<div>
				<label for="codigo">Codigo Edificio</label>
				<input value="<?php echo $edifico->codigo; ?>" required name="codigo" type="number" id="codigo" placeholder="Codigo del Edificio">
			</div>
			<br>
			<button type="submit">Actualizar Edificio</button>
			<br><br>
			<a href="form_update.php">Volver al Listado de Edificios (Actualizar)</a>
		</form>
	</div>
</div>
