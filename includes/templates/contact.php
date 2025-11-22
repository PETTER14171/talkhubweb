<main>
    <section id="contact" class="contact pad">
        <div class="container">
            <h2 class="contact__title">Contact us</h2>

            <form class="form" action="/mail/send.php" method="POST" novalidate>
                <input type="hidden" name="redirect_to" value="<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES) ?>">

                <label>
                    <span>Name</span>
                    <input type="text" name="nombre" required>
                </label>
                <div class="grid-2">
                    <label>
                        <span>Email</span>
                        <input type="email" name="correo" required>
                    </label>
                    <label>
                        <span>Phone</span>
                        <input type="phone" name="phone">
                    </label>
                </div>
                <label>
                    <span>Subject</span>  <!-- Agregar un lista desplegable -->
                    <select name="asunto" id="asunto" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="sales">Sales</option>
                        <option value="human-resources">Human Resources</option>
                        <option value="recruitment">Recruitment</option>
                        <option value="vendors">Vendors</option>
                        <option value="other">Other</option>
                    </select>
                </label>
                <label>
                    <span>Message</span>
                    <textarea name="mensaje" rows="5" required></textarea>
                </label>
                <label class="contact__legal">
                    <input type="checkbox" required>
                    <span>I accept the <a href="/privacy.php" target="_blank" rel="noopener">privacy policy</a> and agree to receive information.</span>
                </label>
                <button class="btn btn-primary contact__submit" type="submit">Submit</button>
            </form>
        </div>
            <!-- partados de footer redes sociales -->
        <div class="container site-tail__row">

            <!-- Izquierda: Logo -->
            <a href="/" class="tail__brand" aria-label="TalkHub home">
                <img src="/build/img/logo.webp" alt="TALKHUB — Together we thrive" />
            </a>

                <!-- Centro: Follow us + redes -->
            <div class="tail__social">
                <!-- Imagen/Flecha + burbuja FOLLOW US (opcionalmente reemplaza por tus SVGs) -->
                <img class="follow__arrow" src="/build/img/follow-arrow.webp" alt="" aria-hidden="true">

                <nav class="socials" aria-label="Social media">
                    <a class="social social--li" href="https://www.linkedin.com/company/talkhub-mx" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <!-- Ícono LinkedIn (SVG) -->
                        <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="currentColor" d="M4.98 3.5A2.5 2.5 0 1 1 0 3.5a2.5 2.5 0 0 1 4.98 0zM.5 8.5h4.9v15H.5v-15zM9 8.5h4.7V11h.1c.7-1.2 2.3-2.5 4.7-2.5C22.7 8.5 24 10.7 24 14v9.5h-5v-8.4c0-2-.7-3.4-2.5-3.4-1.4 0-2.2 1-2.6 2-.1.3-.1.8-.1 1.3v8.5H9V8.5z"/></svg>
                    </a>

                    <a class="social social--fb" href="https://www.facebook.com/people/Talkhub-MX/61563922913292/" target="_blank" rel="noopener" aria-label="Facebook">
                    <!-- Ícono Facebook -->
                        <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="currentColor" d="M13 22v-8h3l1-4h-4V7.5c0-1.1.3-1.8 1.9-1.8H17V2.2C16.6 2.1 15.6 2 14.4 2 11.9 2 10 3.7 10 7v3H7v4h3v8h3z"/></svg>
                    </a>

                    <a class="social social--ig" href="https://www.instagram.com/talkhub_mx/?igsh=cnVxdnJoYXNudmgz&utm_source=qr#" target="_blank" rel="noopener" aria-label="Instagram">
                    <!-- Ícono Instagram -->
                        <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="currentColor" d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.5A5.5 5.5 0 1 1 6.5 13 5.5 5.5 0 0 1 12 7.5zm0 2A3.5 3.5 0 1 0 15.5 13 3.5 3.5 0 0 0 12 9.5zm5.25-3.25a1 1 0 1 1-1 1 1 1 0 0 1 1-1z"/></svg>
                    </a>
                </nav>
            </div>

                <!-- Derecha: Botón Aviso de Privacidad -->
                <a class="privacy-btn" href="/privacy.php" role="button" aria-label="Privacy Notice">
                    <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="currentColor" d="M3 3h18v2H3V3zm2 6h14v2H5V9zm-2 6h10v2H3v-2z"/></svg>
                    <span>Privacy Notice</span>
                </a>
        </div>
    </section>

</main>


