<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario" novalidate>
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu Email" id="email" value="correo@correo.com">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Tu Password" id="password" value="123456">
        </fieldset>
    
        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>
</main>