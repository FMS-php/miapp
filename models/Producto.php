<?php
require_once("config/conexion.php");

class Producto {
    private $db;

    public function __construct() {
        $this->db = conectar();
    }

    public function listar() {
        $sql = "SELECT * FROM productos";
        return $this->db->query($sql);
    }

    public function guardar($nombre, $precio) {
        $sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', $precio)";
        return $this->db->query($sql);
    }

    public function buscarPorId($id){
        $sql = "SELECT * FROM productos WHERE id = $id";
        return $this->db->query($sql)->fetch_assoc();
    }

    public function actualizar($id, $nombre, $precio) {
        $sql = "UPDATE productos SET nombre='$nombre', precio='$precio' WHERE id='$id'";
        return $this->db->query($sql);
    }

    public function borrar($id) {
        $sql = "DELETE FROM productos WHERE id=$id";
        return $this->db->query($sql);
    }
}

?>