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