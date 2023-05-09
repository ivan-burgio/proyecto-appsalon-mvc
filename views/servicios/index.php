<h1 class="nombre-pagina">Administracion de servicios</h1>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<ul class="servicios">
    <?php foreach($servicios as $servicio) { ?>
        <li>
            <p>Nombre: <span><?php echo $servicio->nombre; ?></span></p>
            <p>Precio: <span>$<?php echo $servicio->precio; ?></span></p>
        </li>
    <?php } ?>
</ul>