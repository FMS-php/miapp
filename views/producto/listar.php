<?require_once("config/conexion.php");?>
<link rel="stylesheet" href="../css.css">
    
<header>
    <h2>Lista de Productos</h2>
    <a href="UsuarioI.php">Usuarios</a>
</header>

<br>
<a href="index.php?accion=crear">Crear nuevo producto</a> 

<?php foreach ($resultados as $p): ?>

<p>

    <?= $p['nombre'] ?> - $<?= $p['precio'] ?>

    <a href="index.php?accion=editar&id=<?= $p['id'] ?>">Editar</a>

    <a href="index.php?accion=borrar&id=<?= $p['id'] ?>" onclick="return confirm('¿Seguro que quieres borrar este producto?');">Borrar</a> 

</p>

<?php endforeach; ?>