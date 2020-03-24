<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo lista todos los
datos de la tabla, obteniendo a
los mismos como un arreglo
================================
*/
?>

<?php
	include_once "config.php";
	$sql = $databasePDO->query("select id, nombre, codigo from edificios_crud");
	$resultados = $sql->fetchAll(PDO::FETCH_OBJ);
?>


<div class="row">
	<div class="col-12">
		<h1>Listado de edificios</h1>
		<br>
		<div>
			<table border="1">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Codigo</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($resultados as $edificio){ ?>
						<tr>
							<td><?php echo $edificio->id ?></td>
							<td><?php echo $edificio->nombre ?></td>
							<td><?php echo $edificio->codigo ?></td>
							<td><a href="<?php echo "delete.php?id=" . $edificio->id?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<br>
<a href="../menu_principal.php">Volver al listado de opciones CRUD</a>
