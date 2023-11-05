<main class="auth">
    <h2 class="auth__heading">
        <?php
        echo $titulo;            
        ?>
    </h2>
    <p class="auth__texto">Inicia sesión en DevWebCamp</p>

    <form class="formulario" action="">
        <div class="formulario__campo">
            <label for="email" class="formulario__label" >Email</label>
            <input class="formulario__input" type="email" placeholder="Ingresa Email..." name="email" id="email">
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label" >Password</label>
            <input class="formulario__input" type="password" placeholder="Ingresa Password..." name="password" id="password">
        </div>

        <input class=formulario__submit type="submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a class="acciones__enlace" href="/registro">¿Aún no tienes Cuenta? Obtiene una...</a>
        <a class="acciones__enlace" href="/olvide">Olvidaste tu Password</a>
    </div>
</main>