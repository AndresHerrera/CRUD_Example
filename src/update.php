<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo guarda los datos del formulario
en donde se editan
================================
*/
?>

<?php
#Salir si alguno de los datos no está presente
if (
    !isset($_POST["nombre"]) ||
    !isset($_POST["codigo"]) ||
    !isset($_POST["id"])
) {
    exit();
}
#Si todo va bien, se ejecuta esta parte del código...
include_once "config.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$codigo = $_POST["codigo"];


$sql = $databasePDO->prepare("UPDATE edificios_crud SET nombre = ?, codigo = ? WHERE id = ?;");
$resultado = $sql->execute([$nombre, $codigo, $id]); # Pasar en el mismo orden de los ?


#Si todo salio bien, retornar al form del listado de edificios
if ($resultado === true) {
    header("Location: form_read.php");
} else {
    echo "Algo salio mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
