/**
 * Instalgas Chile - Javascript Interactivo Ligero
 * Sin dependencias pesadas - Alto rendimiento y accesibilidad
 */

(function () {
  'use strict';

  function initApp() {
    // 1. Manejo accesible de Acordeón FAQ con Delegación de Eventos
    const faqGrid = document.querySelector('.faq-grid');
    if (faqGrid && !faqGrid.dataset.initialized) {
      faqGrid.dataset.initialized = 'true';

      faqGrid.addEventListener('click', function (e) {
        const btn = e.target.closest('.faq-question');
        if (!btn) return;

        e.preventDefault();
        const item = btn.closest('.faq-item');
        if (!item) return;

        const isOpen = item.classList.contains('is-open');

        // Cerrar los demás acordeones para comportamiento limpio
        faqGrid.querySelectorAll('.faq-item').forEach(function (other) {
          if (other !== item) {
            other.classList.remove('is-open');
            const otherBtn = other.querySelector('.faq-question');
            if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
          }
        });

        // Alternar el acordeón seleccionado
        if (isOpen) {
          item.classList.remove('is-open');
          btn.setAttribute('aria-expanded', 'false');
        } else {
          item.classList.add('is-open');
          btn.setAttribute('aria-expanded', 'true');
        }
      });
    }

    // 2. Menú de navegación móvil accesible
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    if (menuToggle && navMenu && !menuToggle.dataset.initialized) {
      menuToggle.dataset.initialized = 'true';
      menuToggle.addEventListener('click', function (e) {
        e.preventDefault();
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', String(!isExpanded));
        navMenu.classList.toggle('is-active');
      });

      // Cerrar al hacer clic en enlaces dentro del menú
      navMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
          navMenu.classList.remove('is-active');
          menuToggle.setAttribute('aria-expanded', 'false');
        });
      });
    }

    // 3. Generador de cotización rápida a WhatsApp
    const quickQuoteForm = document.getElementById('quickQuoteForm');
    if (quickQuoteForm && !quickQuoteForm.dataset.initialized) {
      quickQuoteForm.dataset.initialized = 'true';
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
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initApp);
  } else {
    initApp();
  }
})();
