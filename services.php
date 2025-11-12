<?php 
    $page_title = 'Nosotros — Talk‑Hub';
    $page_desc = 'Conoce nuestro equipo y metodología.';
    require 'includes/funciones.php';
    incluirTemplate('head');
    incluirTemplate('headerSecundary');
?>

<main>
    <section class="about pad">
        <div class="container about__grid">
            <!-- Columna izquierda: collage de imágenes -->
            <div class="Colum_left">
                <figure class="about__img about__img--tall">
                    <img src="/build/img/img_business.webp" alt="Team thumbs up">
                </figure>
            </div>

            <!-- Columna derecha: texto -->
            <div class="about__content Colum_right">
                <h2>Enhance your brand and your business.</h2>
                <div class="about__copy">
                    <p>Improve your customer satisfaction and create new business opportunities through automation and digital transformation.</p>
                    <p>Join the growing number of companies that work smart and hard.</p>
                    <p>Take the next step toward efficiency and innovation. Our tailored solutions are designed to optimize your workflows, reduce operational costs, and help your team focus on what truly matters — delivering exceptional results. With the right tools and strategies, your business can move faster, adapt to change, and stay ahead of the competition.</p>
                </div>
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

    <section class="about pad">
        <div class="container about__grid">
            <!-- Columna derecha: texto -->
            <div class="about__content_R Colum_left">
                <h2>Building Innovation Across Borders.</h2>
                <div class="about__copy">
                    <p>From the heart of Texas to the industrial of Naucalpan, Mexico, our company bridges a of opportunity. We combine the entrepreneurial spirit and innovation of the United States with the precision, talent, and dedication of Mexican. This unique synergy allows us to deliver world-class solutions with local agility and global impact.</p>
                    <p>Our operations in Texas serve as the strategic center for research, business development, and client relations, while our facilities in Naucalpan drive production, technology, and customer support. Together, they form a powerful network that integrates experience, quality, and efficiency — ensuring every project meets the highest international standards.</p>
                    <p>We believe in building more than products — we build partnerships that last. Our commitment to excellence, transparency, and continuous improvement has earned the trust of clients across multiple industries, from technology and manufacturing to logistics and customer service.</p>
                    <p>As we continue to grow, our mission remains clear: to empower businesses through innovation, automation, and cross-border collaboration. With a presence in both the U.S. and Mexico, we’re not just connecting regions — we’re shaping the future of global business.</p>
                </div>
            </div>
            <!-- Columna izquierda: collage de imágenes -->
            <div class="Colum_right">
                <figure class="about__img about__img--tall">
                    <img src="/build/img/torres_naucalpan.webp" alt="Team thumbs up">
                </figure>
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
  <div class="container">
    <header class="founders__header">
      <h2>We Strive To Be A True Business Partner</h2>
      <span class="founders__line"></span>
    </header>

    <div class="founders__grid">
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
  </div>

  <!-- Modal del video -->
  <div class="video-modal" id="videoModal">
    <div class="video-modal__content">
      <span class="video-modal__close" id="closeVideoBtn">&times;</span>
      <video src="/build/img/founders.mp4" controls autoplay></video>
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