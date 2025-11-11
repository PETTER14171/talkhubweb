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
        <h1>Partnership and growth opportunities for your business at a nearshore location</h1>
    </div>
    </section>


<!-- Tira de cápsulas flotante -->
    <section class="pill-strip">
        <div class="container">
            <div class="pill">
                <div class="pill__item">
                    <span class="pill__icon" aria-hidden="true">
                        <img src="/build/img/svg-2.svg" alt="svg">
                    </span>
                    <div><div class="pill__title">Customer</div><div class="pill__subtitle">Center</div></div>
                </div>
                <div class="pill__item">
                    <span class="pill__icon" aria-hidden="true">
                        <img src="/build/img/svg-3.svg" alt="svg">
                    </span>
                    <div><div class="pill__title">Customer</div><div class="pill__subtitle">Solutions</div></div>
                </div>
                <div class="pill__item">
                    <span class="pill__icon" aria-hidden="true">
                        <img src="/build/img/svg-4.svg" alt="svg">
                    </span>
                    <div><div class="pill__title">Business Process</div><div class="pill__subtitle">Outsourcing</div></div>
                </div>
            </div>
        </div>
    </section>


    <section class="about pad">
        <div class="container about__grid">
            <!-- Columna izquierda: collage de imágenes -->
            <div class="about__media">
                <figure class="about__img about__img--tall">
                    <img src="/build/img/img_about-1.webp" alt="Team thumbs up">
                </figure>

                <figure class="about__img about__img--top">
                    <img src="/build/img/img_about-2.webp" alt="Agents working">
                </figure>

                <figure class="about__img about__img--bottom">
                    <img src="/build/img/img_about-3.webp" alt="Sales dashboard">
                </figure>

                <!-- Badge superpuesto -->
                <div class="xp-badge">
                    <div class="xp-badge__num">25<span>+</span></div>
                    <div class="xp-badge__txt">Years Experience</div>
                </div>
            </div>

            <!-- Columna derecha: texto -->
            <div class="about__content">
                <h2>About TALKHUB:</h2>
                <div class="about__copy">
                    <p>At TALKHUB, we help to transform business operations through strategic nearshore solutions that blend skilled bilingual professional talent (English and Spanish) with intelligent automation and cost efficiency.</p>
                    <p>We become true business partners, aligning with our clients goals to drive operational efficiency, customer satisfaction, and long-term success.</p>
                    <p>Our value lies in seamlessly integrating human touch with AI and machine learning across customer operations. By leveraging proprietary tools and strategic alliances, we boost performance and streamline operations.</p>
                    <p>This approach enables scalable, high-quality service that adapts to evolving needs and delivers measurable impact.</p>
                    <p>As a U.S.-based organization with operations in Mexico, we serve companies across North and Latin America. Our bilingual teams support clients seeking more than traditional BPO and Call Center services—we provide smart, agile solutions built for growth.</p>
                </div>

                <a class="btn-primary" href="/contact.php"> Contact us <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="loc pad">
        <div class="loc__bg"></div>

        <div class="container loc__grid">
            <div class="loc__text">
                <h2>Our locations and services</h2>

                <div class="loc__copy">
                    <p>We are a BPO and Contact Center company based in the United States with operations in Mexico.</p>
                    <p>We have the capacity to manage small campaigns and grow up to 500 operator positions.</p>
                    <p>We offer bilingual services for businesses in the U.S. and Latin America providing scalable solutions tailored to each market’s needs.</p>
                </div>
            </div>

            <figure class="loc__media">
                <img src="/build/img/map.webp" alt="Map of Mexico and network connections" />
            </figure>
        </div>
    </section>

    
        <section class="about pad">
        <div class="container about__grid">
            <!-- Columna izquierda: collage de imágenes -->
            <div class="">
                <figure class="about__img about__img--tall">
                    <img src="/build/img/img_business.webp" alt="Team thumbs up">
                </figure>
            </div>

            <!-- Columna derecha: texto -->
            <div class="about__content">
                <h2>Enhance your brand and your business.</h2>
                <div class="about__copy">
                    <p>Improve your customer satisfaction and create new business opportunities through automation and digital transformation.</p>
                    <p>Join the growing number of companies that work smart and hard.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="strategy loc">
    <div class="strategy__overlay"></div>
        <div class="container strategy__grid ">
            <div class="strategy__img" loc></div>
            <div class="strategy__text">
                <h2>
                    We develop customized strategies and tailor our services to address each client's unique operational challenges and growth objectives.
                </h2>
            </div>
        </div>
    </section>




<section class="boost">
    <video class="boost__video"
            src="/build/img/Boost_cohete.mp4"
            poster="/build/img/boost_poster.jpg"
            autoplay
            muted
            loop
            playsinline></video>

    <div class="boost__overlay"></div>

    <div class="container boost__content">
        <div class="boost__bubble">
        <h2>
            We work closely with our clients to understand their goals and challenges,
            then leverage our expertise to deliver measurable results that drive
            sustainable growth
        </h2>
        </div>
    </div>



</section>

<section class="founders pad">
  <div class="container founders__grid">
    
    <!-- Lado izquierdo: imagen con botón de play -->
    <div class="founders__media">
      <img src="/build/img/handshake.webp" alt="Handshake between business partners">
      <button class="founders__play" id="playVideoBtn" aria-label="Play video">
        <span>▶</span>
      </button>
    </div>

    <!-- Lado derecho: mensaje de fundadores -->
    <div class="founders__quote">
      <blockquote>
        “At Talk-Hub, we believe that the combination of hard work and perseverance,
        coupled with a clear vision can meet any and all challenges we may face
        and generate a positive impact in our sector. We know the inherent risks
        that come with entrepreneurial endeavors, but our team — skilled, committed
        and adaptable — can and will achieve our goals, transform our business
        while creating & fortifying partnerships.”
      </blockquote>
      <div class="founders__authors">
        <img src="/build/img/founders.jpg" alt="Founders" class="founders__avatar">
        <div>
          <strong>Ernesto Lara - Oscar Olmedo - Antonio Zanella</strong>
          <div class="founders__role">Founders</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal del video -->
  <div class="video-modal" id="videoModal">
    <div class="video-modal__content">
      <span class="video-modal__close" id="closeVideoBtn">&times;</span>
      <video src="/build/video/founders.mp4" controls autoplay></video>
    </div>
  </div>
</section>


<section id="contact" class="container pad">
    <h2>Contact Us</h2>
    <form class="form" action="https://formsubmit.co/soporte@talk-hub.com" method="POST">
        <input type="hidden" name="_cc" value="admin@talk-hub.com, sistemas@talk-hub.com">
        <input type="hidden" name="_bcc" value="gerencia@talk-hub.com">
        <input type="hidden" name="_subject" value="New message from website" />
        <input type="hidden" name="_captcha" value="false" />
        <div class="grid-2">
            <label><span>Name</span><input type="text" name="nombre" required></label>
            <label><span>Email</span><input type="email" name="correo" required></label>
        </div>
        <label><span>Subject</span><input type="text" name="asunto" required></label>
        <label><span>Message</span><textarea name="mensaje" rows="5" required></textarea></label>
        <button class="btn btn-primary" type="submit">Send</button>
    </form>
</section>

</main>





<?php 
incluirTemplate('footer');
?>