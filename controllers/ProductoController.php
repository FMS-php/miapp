<?php
require_once("models/Producto.php");

class ProductoController {
    public function index() {
        $producto = new Producto();
        $resultados = $producto->listar();
        include("views/producto/listar.php");
    }

    public function anadir() {
        $producto = new Producto();
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $resultados = $producto->crear($nombre, $precio);
        include("views/producto/crear.php");
    }
    
    public function editar() {
        $producto = new Producto();
        $id = $_GET['id'];
        $datos = $producto->buscarPorId($id);
        include('views/producto/editar.php');
    }

    public function actualizar() {
        $producto = new Producto();
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $producto->actualizar($id, $nombre, $precio);
        header('Location: index.php');
    }
}
?>