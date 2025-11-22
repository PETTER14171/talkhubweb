<?php if (!empty($_GET['ok'])): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Message sent!',
                text: 'Thank you for contacting us. We will get back to you shortly.',
                icon: 'success',
                timer: 3500,
                timerProgressBar: true,
                showConfirmButton: false
            });
        });
    </script>
<?php endif; ?>

<?php 

    require 'includes/funciones.php';

    incluirTemplate('head', [
        'page_title' => 'Privacy',
        'page_desc'  => 'Conoce nuestro equipo y metodología.'
    ]);

    incluirTemplate('headerSecondary');
?>

<main>
    <section class="container">
        <article class="container privacy">
            <div class="privacy_title"><h2>Privacy Notice – Texas Data Privacy</h2></div>

            <h3>1. Introduction</h3>
                <P>
                    This Privacy Notice applies to Texas residents interacting with GALAXY ENERGY LLC (“we/us/our”)<br>
                    in an individual or household context. We comply with the Texas Data Privacy and Security Act(TDPSA).
                </P>
            <h3>2. Information We Collect</h3>
                <P>
                    We collect and process the following categories of personal data:<br>
                    Identifiers (name, email address, IP address, phone number, etc.)<br>
                    Commercial information (purchase history, products or services requested)<br>
                    Precise geolocation information (when applicable)<br>
                    Any other data relevant to your interactions with our services<br>
                </P>
            <h3>3. Purposes for Data Processing</h3>
                <P>
                    We process personal data to:<br>
                    Provide, operate, and maintain our products and services<br>
                    Personalize and improve your user experience<br>
                    Fulfill legal and contractual obligations<br>
                    Perform internal analytics, fraud prevention, and security<br>
                </P>
            <h3>4. Sharing Personal Data</h3>
                <P>
                    We may share your data with:<br>
                    Service providers and business partners under contract<br>
                    Government authorities as required by law<br>
                    Third parties in the event of a sale, merger, or acquisition<br>
                </P>
            <h3>5. Sale of Personal Data (include this section only if applicable):</h3>
                <P>
                    Notice: We may sell sensitive personal or biometric data.<br>
                    Notice: We may sell biometric data.
                </P>
            <h3>6. Texas Consumer Rights</h3>
                <P>
                    You have the following rights under the TDPSA:<br>
                    Access your personal data<br>
                    Correct inaccurate data<br>
                    Delete your data<br>
                    Request a portable copy of your data<br>
                    Opt out of the sale, targeted advertising, and automated profiling<br>
                    <br>
                    To exercise your rights, contact us via:<br>
                    <br>
                    Email: soporte@talk-hub.com<br>
                    Phone: +52 55 1544 1211<br>
                    Web form: www.talk-hub.com<br>
                    We respond to requests within a maximum of 45 days.<br>
                </P>
            <h3>7. Non-Discrimination</h3>
                <P>
                    We do not discriminate for exercising your privacy rights.What rights you have over your data
                </P>
            <h3>8. Changes to this Privacy Notice</h3>
                <P>
                    We reserve the right to modify this notice. Please check the last updated date. <br>
                    Contact Us
                    If you have any questions about this notice or wish to exercise your rights, please contact us at:<br>
                    soporte@talk-hub.com<br>
                    8350 Ashlane Way, Suite 104, The Woddlands TX, 77382<br>
                    +52 55 1544 1211<br>
                </P>
                <P class="pie_pagina">
                    All rights reserved
                </P>
        </article>
    </section>
</main>

<?php 
incluirTemplate('contact');
?>

</main>

<?php 
incluirTemplate('footer');
?>