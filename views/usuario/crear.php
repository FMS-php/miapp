<?
    require_once("config/conexion.php");
?>
<h2>Crear Usuario</h2>
    
<form method="POST" action="index.php?accion=guardarU">
        
    Nombre: <input type="text" name="nombre"><br>
        
    Email: <input type="mail" name="email"><br>
        
    <input type="submit" value="Guardar">

</form>