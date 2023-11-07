<main class="auth">
    <h2 class="auth__heading">
        <?php
        echo $titulo;            
        ?>
    </h2>
    <p class="auth__texto">Coloca tu nuevo Password</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>


    <?php if($token_valido) { ?>

        <form class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="password" class="formulario__label" >Nuevo Password</label>
            <input class="formulario__input" type="password" placeholder="Ingresa Nuevo Password..." name="password" id="password">
        </div>

        <input class=formulario__submit type="submit" value="Cambiar Password">
    </form>
    
    <?php }?>

    

    <div class="acciones">
        <a class="acciones__enlace" href="/login">¿Ya tienes Cuenta? Inicia Sesión...</a>
        <a class="acciones__enlace" href="/registro">¿Aún no tienes Cuenta? Obtiene una...</a>
    </div>
</main>