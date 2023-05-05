<h1 class="nombre-pagina">Nuevo servicio</h1>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Guardar servicios">
</form>