<main class="auth">
    <h2 class="auth__heading">
        <?php
        echo $titulo;            
        ?>
    </h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <form class="formulario" action="">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label" >Nombre</label>
            <input class="formulario__input" type="text" placeholder="Ingresa Nombre..." name="nombre" id="nombre">
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label" >Apellido</label>
            <input class="formulario__input" type="text" placeholder="Ingresa Apellido..." name="apellido" id="apellido">
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label" >Email</label>
            <input class="formulario__input" type="email" placeholder="Ingresa Email..." name="email" id="email">
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label" >Password</label>
            <input class="formulario__input" type="password" placeholder="Ingresa Password..." name="password" id="password">
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label" >Repetir Password</label>
            <input class="formulario__input" type="password" placeholder="Ingresa Password..." name="password2" id="password2">
        </div>

        <input class=formulario__submit type="submit" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a class="acciones__enlace" href="/login">¿Ya tienes Cuenta? Inicia Sesión...</a>
        <a class="acciones__enlace" href="/olvide">Olvidaste tu Password</a>
    </div>
</main>