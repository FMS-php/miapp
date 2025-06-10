<?php
require_once("controllers/ProductoController.php");
$controller = new ProductoController();

$accion = $_GET['accion'] ?? 'index';

if ($accion == 'crear') {
    header('Location: views/producto/crear.php');
}else if ($accion == 'editar') {
    $controller->editar();
}else if ($accion == 'actualizar'){
    $controller->actualizar();
} else {
    $controller->index();
}
?>