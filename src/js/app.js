(function(){
const $toggle = document.getElementById('navToggle');
const $nav = document.getElementById('mainNav');
if($toggle && $nav){
$toggle.addEventListener('click', ()=> $nav.classList.toggle('open'));
}


// Accesibilidad: cerrar nav con ESC
document.addEventListener('keydown', (e)=>{
if(e.key === 'Escape') $nav && $nav.classList.remove('open');
});


// Helper para formularios (validación HTML5 + feedback simple)
document.querySelectorAll('form').forEach(form =>{
form.addEventListener('submit', (e)=>{
if(!form.checkValidity()){
e.preventDefault();
// highlight el primer inválido
const first = form.querySelector(':invalid');
first && first.focus();
}
});
});
})();


  // Carrusel simple con Ken Burns
(function () {
    const root = document.querySelector('.hero__slides');
    if (!root) return;
    const slides = Array.from(root.querySelectorAll('.hero__slide'));
    if (slides.length <= 1) return;

    const interval = Number(root.getAttribute('data-interval')) || 7000;
    let i = 0;

    setInterval(() => {
      const current = slides[i];
      i = (i + 1) % slides.length;
      const next = slides[i];

      current.classList.remove('is-active');
      // Forzar reflujo para reiniciar animaciones si vuelven a activarse luego
      void next.offsetWidth;
      next.classList.add('is-active');
    }, interval);
})();


document.addEventListener("DOMContentLoaded", () => {
    // 1. Obtener los elementos principales
    const modal = document.getElementById("videoModal");
    const playBtn = document.getElementById("playVideoBtn");
    const closeBtn = document.getElementById("closeVideoBtn");
    // Se añade una variable para el elemento de video directamente
    const videoElement = modal ? modal.querySelector("video") : null;

    // 2. Manejador para abrir el modal y reproducir
    playBtn?.addEventListener("click", () => {
        if (modal) {
            modal.classList.add("active");
        }
        // Opcional: Iniciar reproducción automática si existe el elemento de video
        if (videoElement) {
            videoElement.play();
        }
    });

    // 3. Función para cerrar el modal y detener/resetear el video
    const closeModal = () => {
        if (modal) {
            modal.classList.remove("active");
        }
        if (videoElement) {
            // Detiene la reproducción
            videoElement.pause();
            // Importante: Resetea el video al inicio para la próxima vez
            videoElement.currentTime = 0;
        }
    };

    // 4. Manejador para el botón de cierre
    closeBtn?.addEventListener("click", closeModal);

    // 5. Manejador para cerrar al hacer clic fuera del contenido (en el overlay del modal)
    modal?.addEventListener("click", (e) => {
        // e.target es el elemento donde se hizo clic
        if (e.target === modal) {
            closeModal();
        }
    });
});



///Animaciones

document.addEventListener('DOMContentLoaded', () => {
  const badge = document.querySelector('.xp-badge');
  if (!badge) return;

  const numWrap = badge.querySelector('.xp-badge__num');
  if (!numWrap) return;

  // Asegura que tenemos un nodo de texto solo para el número
  let numberTextNode = Array.from(numWrap.childNodes).find(n => n.nodeType === 3);
  if (!numberTextNode) {
    numberTextNode = document.createTextNode('0');
    numWrap.insertBefore(numberTextNode, numWrap.firstChild);
  }

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const animateCount = (from = 1, to = 25, duration = 1200) => {
    if (prefersReduced) {
      numberTextNode.nodeValue = String(to);
      badge.classList.add('pulse-zoom');
      return;
    }

    const easeOutCubic = t => 1 - Math.pow(1 - t, 3);
    let startTs = null;

    const step = (ts) => {
      if (startTs === null) startTs = ts;
      const p = Math.min((ts - startTs) / duration, 1);
      const eased = easeOutCubic(p);
      const current = Math.max(from, Math.floor(from + (to - from) * eased));
      numberTextNode.nodeValue = String(current);

      if (p < 1) {
        requestAnimationFrame(step);
      } else {
        numberTextNode.nodeValue = String(to);
        badge.classList.add('pulse-zoom');
      }
    };

    requestAnimationFrame(step);
  };

  // Dispara cuando el badge entra al viewport (una sola vez)
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !badge.dataset.animated) {
        badge.dataset.animated = '1';
        animateCount(1, 25, 1200);
      }
    });
  }, { threshold: 0.35 });

  io.observe(badge);

  // Opcional: permitir repetir la animación si deseas
  badge.addEventListener('animationend', (e) => {
    if (e.animationName === 'badgePulse') {
      badge.classList.remove('pulse-zoom');
      // Si quieres que se pueda repetir más adelante, elimina el flag:
      // delete badge.dataset.animated;
    }
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const badge = document.querySelector('.xp-badge');
  if (!badge) return;

  const numWrap = badge.querySelector('.xp-badge__num');
  let numberTextNode = Array.from(numWrap.childNodes).find(n => n.nodeType === 3);
  if (!numberTextNode) {
    numberTextNode = document.createTextNode('0');
    numWrap.insertBefore(numberTextNode, numWrap.firstChild);
  }

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const animateCount = (from = 1, to = 25, duration = 1200) => {
    if (prefersReduced) {
      numberTextNode.nodeValue = String(to);
      badge.classList.add('pulse-zoom');
      return;
    }

    const easeOutCubic = t => 1 - Math.pow(1 - t, 3);
    let startTs = null;

    const step = (ts) => {
      if (startTs === null) startTs = ts;
      const p = Math.min((ts - startTs) / duration, 1);
      const eased = easeOutCubic(p);
      const current = Math.max(from, Math.floor(from + (to - from) * eased));
      numberTextNode.nodeValue = String(current);

      if (p < 1) {
        requestAnimationFrame(step);
      } else {
        numberTextNode.nodeValue = String(to);
        badge.classList.add('pulse-zoom'); // dispara el zoom
      }
    };

    requestAnimationFrame(step);
  };

  // 👇 se dispara al entrar en viewport
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !badge.dataset.animated) {
        badge.dataset.animated = 'true'; // evita repetir
        animateCount(1, 25, 1200);
      }
    });
  }, { threshold: 0.4 }); // visible al menos 40%

  observer.observe(badge);

  badge.addEventListener('animationend', (e) => {
    if (e.animationName === 'badgePulse') {
      badge.classList.remove('pulse-zoom');
    }
  });
});

////////////////////////////////////////////////////
//acimacion de de dos columnas izquierda y derecha//
////////////////////////////////////////////////////

document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".Colum_left, .Colum_right");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // Detiene la observación una vez animado
      }
    });
  }, {
    threshold: 0.3 // el 30% del elemento visible activa la animación
  });

  elements.forEach(el => observer.observe(el));
});


////////////////////////////////////////////////////
////////////////Funcion de formulario///////////////
////////////////////////////////////////////////////

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".form");
    const checkbox = form.querySelector('input[type="checkbox"]');

    form.addEventListener("submit", function (e) {
        if (!checkbox.checked) {
            e.preventDefault(); // detiene envío del formulario

            Swal.fire({
                title: "Required",
                text: "You must accept the privacy policy to submit the form.",
                icon: "warning",
                confirmButtonText: "Understood"
            });
        }
    });
});
