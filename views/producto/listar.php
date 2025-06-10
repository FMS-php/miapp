<h2>Lista de Productos</h2>
<?php foreach ($resultados as $p): ?>
    <p>
        <?= $p['nombre'] ?> - $<?= $p['precio'] ?>

        <a href="index.php?accion=editar&id=<?=$p['id'];?>">Editar</a>
    </p>
<?php endforeach; ?>