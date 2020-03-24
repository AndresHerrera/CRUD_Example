<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo elimina un dato por ID sin
pedir confirmación. El ID viene de la URL
================================
*/
if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "config.php";

$sql = $databasePDO->prepare("DELETE FROM edificios_crud WHERE id = ?;");
$resultado = $sql->execute([$id]);

if ($resultado === true) {
    header("Location: form_read.php");
} else {
    echo "Algo salio mal al tratar de eliminar el edificio";
}
