<main class="auth">
    <h2 class="auth__heading">
        <?php
        echo $titulo;            
        ?>
    </h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form class="formulario" method="POST" action="/olvide">
        <div class="formulario__campo">
            <label for="email" class="formulario__label" >Email</label>
            <input class="formulario__input" type="email" placeholder="Ingresa Email..." name="email" id="email">
        </div>

        <input class=formulario__submit type="submit" value="Enviar instrucciones">
    </form>

    <div class="acciones">
        <a class="acciones__enlace" href="/login">¿Ya tienes Cuenta? Inicia Sesión...</a>
        <a class="acciones__enlace" href="/registro">¿Aún no tienes Cuenta? Obtiene una...</a>
    </div>
</main>