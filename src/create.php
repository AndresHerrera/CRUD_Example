<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["nombre"]) || !isset($_POST["codigo"])) {
    exit();
}
#Si todo va bien, se ejecuta esta parte del código...
include_once "config.php";

$nombre = $_POST["nombre"];
$codigo = $_POST["codigo"];

$sql = $databasePDO->prepare("INSERT INTO edificios_crud(nombre, codigo) VALUES (?, ?);");
$resultado = $sql->execute([$nombre, $codigo]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar
if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: form_read.php");
} else {
    echo "Algo salio mal. Por favor verifica que la tabla exista";
}
