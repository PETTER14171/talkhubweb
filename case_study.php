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
    $page_title = 'Nosotros — Talk‑Hub';
    $page_desc = 'Conoce nuestro equipo y metodología.';
    require 'includes/funciones.php';
    incluirTemplate('head');
    incluirTemplate('header');
?>

<main>
<!-- HERO como la captura -->
    <section class="hero hero--cover">
        <div class="hero__slides" data-interval="7000">
            <div class="hero__slide is-active" style="--img:url('/build/img/hero-1.webp')"></div>
            <div class="hero__slide" style="--img:url('/build/img/hero-2.webp')"></div>
            <div class="hero__slide" style="--img:url('/build/img/hero-3.webp')"></div>
        </div>

        <div class="hero__overlay"></div>

        <div class="container hero__content">
            <h1>Client: Durable Medical Equipment (DME) Supplier — Frontline CX Support & Back-Office Processing</h1>
        </div>
    </section>

    <section class="pill-strip">
        <div class="container">
            <p class="pill_all_txt">A U.S.-based DME supplier serving third largest population state, providing critical products and support to aging adults across the southern region.</p>
        </div>
    </section>

    <section class="case-metrics">
        <div class="container case-metrics__grid">

            <!-- Tarjeta 1 -->
            <article class="case-metrics__card Colum_left">
                <h3 class="case-metrics__title">Over 2 Years Of Support</h3>
                <p class="case-metrics__text">
                    Providing inbound contact center services in English and Spanish —
                    handling inquiries from patients, doctors, medical staff, hospitals,
                    and insurance companies.
                </p>
                <span class="case-metrics__divider" aria-hidden="true"></span>
            </article>

            <!-- Tarjeta 2 -->
            <article class="case-metrics__card Colum_right">
                <h3 class="case-metrics__title">Over 2 Years Of Collaboration</h3>
                <p class="case-metrics__text">
                    Performing document verification, validation, and work order creation
                    based on patient eligibility.
                </p>
                <span class="case-metrics__divider" aria-hidden="true"></span>
            </article>

        </div>
    </section>

    <section class="loc pad">
        <div class="loc__bg"></div>

        <div class="container loc__grid">
            <div class="loc__text">
                <h2>Challenge</h2>

                <div class="loc__copy">
                    <p>Challenge The DME supplier required support for document classification from a real-time document queue and subsequent processing. The queue receives documentation from multiple sources, including insurance companies, hospitals, and physicians, each with differing SLAs based on request type.</p>
                    <p>Additionally, once documents are classified, various back-office processes must be executed within the CRM after confirming patient eligibility and coverage.</p>
                </div>
            </div>

            <figure class="loc__media">
                <img src="/build/img/solutions.webp" alt="Solutions network connections" />
            </figure>
        </div>
    </section>

    <section class="about pad">
        <div class="container about__grid">
            <!-- Columna izquierda: collage de imágenes -->
            <div class="Colum_left">
                <figure class="about__img about__img--tall">
                    <img src="/build/img/sales-leaf.webp" alt="Team thumbs up">
                </figure>
            </div>

            <!-- Columna derecha: texto -->
            <div class="about__content Colum_right">
                <h2>Solution</h2>
                <div class="about__copy">
                    <p>TalkHub and the DME supplier partnered to hire and train a small team of cross-functional account executives capable of seamlessly pivoting between sub-tasks.</p>
                    <p>Team members begin in the call center queue and are then assigned to specific sub-tasks based on their expertise and proficiency in particular processes.</p>
                    <p>This flexible model allowed the DME supplier to improve service levels and, ultimately, enhance patient satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="loc pad">
        <div class="loc__bg"></div>

        <div class="container loc__grid">
            <figure class="loc__media">
                <img src="/build/img/Impact.webp" alt="Solutions network connections" />
            </figure>

            <div class="loc__text">
                <h2>Impact</h2>

                <div class="loc__copy">
                    <p>Reduced SLAs to ensure same-day responses for all DME requests.</p>
                    <p>Improved patient satisfaction by providing accurate, real-time CRM updates.</p>
                    <p>Delivered reliable performance across all major call center KPIs — from handle time to speed to answer and abandon rate.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="">
            <p class="pill_all_txt">These partnership efforts enabled the DME supplier and TalkHub to significantly improve overall patient satisfaction and ensure compliance with partners — including hospitals, doctors, and insurance companies — through clear, effective communication across all stakeholders.</p>
    </section>

<?php 
incluirTemplate('contact');
?>

</main>

<?php 
incluirTemplate('footer');
?>