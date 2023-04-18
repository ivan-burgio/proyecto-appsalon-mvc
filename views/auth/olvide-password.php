<h1 class="nombre-pagina">Olvide mi contraseña</h1>
<p class="descripcion-pagina">Te enviaremos un email para confirmar tu identidad y asi poder restablecer tu contraseña.</p>

<?php include_once __DIR__ . "/../templates/alertas.php" ?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email">
    </div>

    <input type="submit" class="boton" value="Enviar Email">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta?</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta?</a>
</div>