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


<div>
	<div>
		<h1>Listado de Edificios</h1>
		<br>
		<div>
			<table border="1">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Codigo</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($resultados as $edificio){ ?>
						<tr>
							<td><?php echo $edificio->id ?></td>
							<td><?php echo $edificio->nombre ?></td>
							<td><?php echo $edificio->codigo ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<br>
<a href="../menu_principal.php">Volver al listado de opciones CRUD</a>
