/**
 * Instalgas Chile - Javascript Interactivo Ligero
 * Sin dependencias pesadas - Alto rendimiento y accesibilidad
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Manejo accesible de Acordeón FAQ
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach((item) => {
    const btn = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    
    if (btn && answer) {
      btn.addEventListener('click', function () {
        const isOpen = item.classList.contains('is-open');
        
        // Cerrar otros acordeones si se desea comportamiento único
        faqItems.forEach((other) => {
          if (other !== item && other.classList.contains('is-open')) {
            other.classList.remove('is-open');
            const otherBtn = other.querySelector('.faq-question');
            if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
          }
        });

        // Alternar el actual
        if (isOpen) {
          item.classList.remove('is-open');
          btn.setAttribute('aria-expanded', 'false');
        } else {
          item.classList.add('is-open');
          btn.setAttribute('aria-expanded', 'true');
        }
      });
    }
  });

  // 2. Menú de navegación móvil accesible
  const menuToggle = document.getElementById('menuToggle');
  const navMenu = document.getElementById('navMenu');
  
  if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', function () {
      const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', !isExpanded);
      navMenu.classList.toggle('is-active');
    });

    // Cerrar al hacer clic en enlaces dentro del menú
    navMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('is-active');
        menuToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // 3. Generador de mensaje rápido hacia WhatsApp (+56 9 4987 7316)
  const quickQuoteForm = document.getElementById('quickQuoteForm');
  if (quickQuoteForm) {
    quickQuoteForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const service = document.getElementById('formService')?.value || 'Consulta General';
      const commune = document.getElementById('formCommune')?.value || 'Santiago';
      const urgency = document.getElementById('formUrgency')?.value || 'Normal';
      const comment = document.getElementById('formComment')?.value || '';

      const baseText = `Hola Instalgas Chile, necesito atención técnica con Domingo Isaín (SEC).\n- *Servicio:* ${service}\n- *Comuna:* ${commune}\n- *Urgencia:* ${urgency}${comment ? `\n- *Detalle:* ${comment}` : ''}`;
      
      const targetUrl = `https://wa.me/56949877316?text=${encodeURIComponent(baseText)}`;
      window.open(targetUrl, '_blank');
    });
  }
});
