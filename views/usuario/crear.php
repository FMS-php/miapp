<?
    require_once("config/conexion.php");
?>
<link rel="stylesheet" href="../css.css">

<h2>Crear Usuario</h2>
    
<form method="POST" action="UsuarioI.php?accion=guardar">
        
    Nombre: <input type="text" name="nombre"><br>
        
    Email: <input type="mail" name="email"><br>
        
    <input type="submit" value="Guardar">

</form>