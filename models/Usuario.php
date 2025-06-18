<?php
require_once("config/conexion.php");

class Usuario {
    private $db;

    public function __construct() {
        $this->db = conectar();
    }

    public function listar() {
        $sql = "SELECT * FROM usuario";
        return $this->db->query($sql);
    }

    public function guardar($nombre, $email) {
        $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
        return $this->db->query($sql);
    }

    public function buscarPorId($id){
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        return $this->db->query($sql)->fetch_assoc();
    }

    public function actualizar($id, $nombre, $email) {
        $sql = "UPDATE productos SET nombre='$nombre', email='$email' WHERE id='$id'";
        return $this->db->query($sql);
    }

    public function borrar($id) {
        $sql = "DELETE FROM productos WHERE id=$id";
        return $this->db->query($sql);
    }
}

?>