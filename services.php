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
    incluirTemplate('headerSecundary');
?>

<main>
    <section class="services pad">
        <div class="container services__grid">

            <!-- LADO IZQUIERDO: 2 imágenes -->
            <div class="services__media Colum_left">
                <!-- Tarjeta principal -->
                <figure class="media-card">
                    <img class="media-card__img" src="/build/img/service-main.webp" alt="Omni-channel illustration">
                </figure>

                <!-- Tarjeta flotante (superpuesta) -->
                <figure class="media-float">
                    <img src="/build/img/service-float.webp" alt="Social media apps">
                </figure>
            </div>

            <!-- LADO DERECHO: contenido -->
            <div class="services__content Colum_right">
                <h2 class="">Services</h2>
                <h1>Omni-channel customer support:</h1>
                <p>
                    Deliver seamless experiences across voice, chat, email, tickets, social media, and more, in both English and Spanish.
                    TalkHub bilingual support teams are trained to meet your customers where they are, ensuring satisfaction and loyalty.
                </p>
                <!-- …botón/CTA si lo necesitas -->
            </div>

        </div>
    </section>


    <section class="performance pad" style="--bg:url('/build/img/perf-bg.webp')">
        <div class="container performance__grid">
            <div class="performance__copy">
                <h2>Performance That Sets Us Apart</h2>
                <ul class="performance__bullets">
                    <li><strong>Less than 0.99% Abandon Rate</strong> Every customer gets the help they need, the first time.</li>
                    <li><strong>Single-Digit Attrition</strong> Stable teams drive performance, consistency, and long-term knowledge retention.</li>
                    <li><strong>QA Scores Consistently Above Target</strong> Quality interactions, every time — no exceptions.</li>
                </ul>
                <p>Beyond support, we deliver brand-aligned service that builds trust and loyalty.</p>
            </div>

            <figure class="performance__card ">
                <img src="/build/img/perf-side.webp" alt="Team reviewing results">
            </figure>
        </div>
    </section>

    <section class="kpi pad">
        <div class="container kpi__grid">
            <div class="kpi__copy Colum_left">
                <h2>High Productivity + Accuracy</h2>
                <p>Your business processes are the lifeblood of your operations. We ensure
                    efficiency and precision — especially in document processing workflows.</p>

                <h3>Flexibility and Commitment</h3>
                <p>To scale your team when and how you need it. Our workforce maintains 99% +
                    adherence to business requirements and shifts seamlessly between tasks to
                    keep operations flowing.</p>
            </div>

            <!-- Imagen con "marco de hoja" -->
            <div class="kpi__frame Colum_right">
                <figure class="kpi__media">
                    <img src="/build/img/ops-analytics.webp" alt="Operations analytics">
                </figure>
            </div>
        </div>
    </section>

    <section class="bpo-hero" style="--bg:url('/build/img/backoffice-bpo.webp')">
        <div class="container bpo-hero__inner">
            <div class="bpo-hero__copy">
            <h2>Back Office BPO</h2>
            <p>
                At TalkHub, we combine skilled talent with AI-powered tools to support real-time and back-office processes — both internal and customer-facing — from our nearshore location in Mexico. Our teams bring a personalized, human touch with full omnichannel capability.
            </p>
            </div>
        </div>
    </section>

    <section class="impact pad">
        <div class="container impact__grid">
            <!-- Imagen izquierda (tarjeta) -->
             <div class="Colum_left">
                <figure class="impact__media">
                    <img src="/build/img/analytics-team.webp" alt="Team reviewing analytics">
                </figure>
            </div>
            <!-- Texto derecha -->
            <div class="impact__copy Colum_right">
                <h2>
                    Consistent Results<br>
                    and Measurable<br>
                    Impact
                </h2>
                <p>
                    Achieving 95–110% of collection targets, we engage, commit, and deliver —
                    exceeding recovery goals while preserving your customer relationships and
                    maintaining Net Promoter Scores above 90%.
                </p>
            </div>
        </div>
    </section>

    <section class="collections pad" style="--bg:url('/build/img/collections-bg.webp')">
        <div class="container collections__inner">
            
            <!-- Texto principal -->
            <div class="collections__copy">
                <h2>Collections</h2>
                <p>
                    At TalkHub, achieving above-average recovery rates requires both skilled agents and
                    advanced technology — including omnichannel communication and strategic contact
                    workflows. Our approach is designed to maximize user reach and drive on-time
                    payments — especially in early-stage recovery programs.
                </p>
            </div>

            <!-- Tarjeta de imagen derecha -->
            <figure class="collections__media">
                <img src="/build/img/collections-team.webp" alt="Collections team">
            </figure>

        </div>
    </section>

    <section id="sales" class="sales pad">
        <div class="container">

            <!-- Bloque superior: imágenes + título y copy -->
            <div class="sales__top">
                <div class="sales__top-media Colum_left">
                    <img
                    src="/build/img/sales-main.webp"
                    alt="Sales team celebrating"
                    class="sales__img sales__img--main"
                    >
                    <img
                    src="/build/img/sales-small.webp"
                    alt="Happy sales team"
                    class="sales__img sales__img--small"
                    >
                </div>

                <div class="sales__top-copy Colum_right">
                    <h2>Sales</h2>
                    <p>
                    Drive revenue, improve conversion rates and increase customer retention
                    with TalkHub’s omnichannel sales support — powered by data-driven
                    strategies and a proven consultative approach.
                    </p>
                </div>
            </div>

            <!-- Bloque inferior: texto + imagen tipo hoja -->
            <div class="sales__bottom">
                <div class="sales__bottom-copy Colum_left">
                    <h3>Proven Sales Methodology</h3>
                    <p>
                    Our consultative approach builds trust, improves close rates, and
                    maximizes customer lifetime value — whether B2B or B2C.
                    </p>

                    <h3>Omnichannel Sales Execution</h3>
                    <p>
                    We support inbound and outbound programs across voice, chat, email
                    and social — meeting your customers where they are, when it matters
                    most.
                    </p>
                </div>

                <div class="Colum_right">
                    <figure class="sales__leaf">
                        <img src="/build/img/sales-leaf.webp" alt="Successful sales celebration">
                    </figure>
                    <p class="sales__note">
                        With TALKHUB, every customer interaction <br> becomes a revenue opportunity.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="clients">
        <div class="clients__overlay">
            <div class="container clients__inner">
            <h2 class="clients__title">
                Together, making your business look good!
            </h2>
            <p class="clients__text">
                We deliver outstanding customer experiences that boost client
                satisfaction and build stronger customer connections.
            </p>

            <!-- Carrusel de logos -->
                <div class="clients__carousel" aria-label="Our clients">
                    <div class="clients__track">
                        <!-- LOGOS (repite / agrega los que tengas) -->
                        <div class="clients__logo">
                            <img src="/build/img/Logo_xfinity.webp" alt="Tala">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_tala.webp" alt="SurfMed">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_sufmed.webp" alt="Shriners Children's">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_shriners.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_peddle.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_nuveto.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_five9.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_cox.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_comcast.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_calls.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_bryam.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_welcome.webp" alt="Peddle">
                        </div>

                        <!-- duplicados para efecto infinito -->
                        <div class="clients__logo">
                            <img src="/build/img/Logo_xfinity.webp" alt="Tala">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_tala.webp" alt="SurfMed">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_sufmed.webp" alt="Shriners Children's">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_shriners.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_peddle.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_nuveto.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_five9.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_cox.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_comcast.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_calls.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_bryam.webp" alt="Peddle">
                        </div>
                        <div class="clients__logo">
                            <img src="/build/img/Logo_welcome.webp" alt="Peddle">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barra inferior tipo “Visit our CaseStudy section Now” -->
        <div class="clients__cta">
            <div class="container clients__cta-inner">
                <span>Visit our CaseStudy section</span>
                <a class="clients__cta-btn" href="/case_study.php">Now</a>
            </div>
        </div>
    </section>


<?php 
incluirTemplate('contact');
?>

</main>

<?php 
incluirTemplate('footer');
?>