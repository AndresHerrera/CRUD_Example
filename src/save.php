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
    !isset($_POST["edad"]) ||
    !isset($_POST["id"])
) {
    exit();
}
#Si todo va bien, se ejecuta esta parte del código...
include_once "config.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$sentencia = $base_de_datos->prepare("UPDATE mascotas SET nombre = ?, edad = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $edad, $id]); # Pasar en el mismo orden de los ?

if ($resultado === true) {
    header("Location: list.php");
} else {
    echo "Algo salio mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}