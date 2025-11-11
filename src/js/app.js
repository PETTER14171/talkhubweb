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
  const modal = document.getElementById("videoModal");
  const playBtn = document.getElementById("playVideoBtn");
  const closeBtn = document.getElementById("closeVideoBtn");

  playBtn?.addEventListener("click", () => {
    modal.classList.add("active");
  });

  closeBtn?.addEventListener("click", () => {
    modal.classList.remove("active");
    modal.querySelector("video").pause();
  });

  // Cerrar al hacer click fuera del video
  modal?.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.remove("active");
      modal.querySelector("video").pause();
    }
  });
});
