<?php
$page_title = 'Contacto — Talk‑Hub';
$page_desc = 'Escríbenos y te respondemos hoy.';
require 'includes/funciones.php';
incluirTemplate('head');
incluirTemplate('header');
?>

<main class="container pad">
    <h1>Contacto</h1>
    <p>Completa el formulario y nos pondremos en contacto.</p>


    <!-- MÉTODO A: FormSubmit con CC/BCC (sin backend propio) -->
    <form class="form" action="https://formsubmit.co/soporte@talk-hub.com" method="POST">
        <input type="hidden" name="_cc" value="admin@talk-hub.com, sistemas@talk-hub.com">
        <input type="hidden" name="_bcc" value="gerencia@talk-hub.com">
        <input type="hidden" name="_subject" value="Nuevo mensaje desde el sitio web" />
        <input type="hidden" name="_captcha" value="false" />
        <!-- Redirección después de enviar (ajusta la URL) -->
        <input type="hidden" name="_next" value="https://tu-dominio.com/contacto-gracias" />


        <div class="grid-2">
            <label>
            <span>Nombre</span>
            <input type="text" name="nombre" required>
            </label>
            <label>
            <span>Correo</span>
            <input type="email" name="correo" required>
            </label>
        </div>

        <label>
            <span>Asunto</span>
            <input type="text" name="asunto" required>
        </label>
        <label>
            <span>Mensaje</span>
            <textarea name="mensaje" rows="5" required></textarea>
        </label>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>


    <hr class="sep" />


    <!-- MÉTODO B: Backend propio (descomenta para usar)
    <form class="form" action="/mail/send.php" method="POST" novalidate>
    <div class="grid-2">
    <label>
    <span>Nombre</span>
    <input type="text" name="nombre" required>
    </label>
    <label>
    <span>Correo</span>
    <input type="email" name="correo" required>
    </label>
    </div>
    <label>
    <span>Asunto</span>
    <input type="text" name="asunto" required>
    </label>
    <label>
    <span>Mensaje</span>
    <textarea name="mensaje" rows="5" required></textarea>
    </label>
    <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
    -->
</main>

<?php 
    incluirTemplate('footer');
?>