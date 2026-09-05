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

    // 4. Registro Imperativo WebMCP (Google Chrome 150+ / W3C Model Context Protocol)
    const mc = (typeof window !== 'undefined' && window.modelContext) ||
               (typeof navigator !== 'undefined' && navigator.modelContext) ||
               (typeof document !== 'undefined' && document.modelContext);

    if (mc && typeof mc.registerTool === 'function') {
      try {
        const quoteSchema = {
          type: 'object',
          properties: {
            servicio: {
              type: 'string',
              description: 'Servicio solicitado: Detección de Fugas con Gas Trazador, Sellado Prodoral R6-1 sin Romper, Certificación Sello Verde SEC, etc.',
              enum: [
                'Detección de Fugas con Gas Trazador',
                'Sellado con Prodoral R6-1 sin Romper',
                'Certificación SEC / Sello Verde',
                'Regularización de Sello Rojo / Corte de Gas',
                'Mantención / Reparación de Calefont',
                'Instalación de Red de Cobre Nueva',
                'Urgencia 24 Horas'
              ]
            },
            comuna: {
              type: 'string',
              description: 'Comuna o sector en Santiago o V Región (ej: Providencia, Las Condes, Vitacura, Ñuñoa, etc.)'
            },
            urgencia: {
              type: 'string',
              description: 'Nivel de urgencia (ej: Urgente - Hoy Mismo, Próximos días, Solo Cotización)'
            },
            detalles: {
              type: 'string',
              description: 'Detalles adicionales o síntomas observados en la instalación'
            }
          },
          required: ['servicio', 'comuna']
        };

        mc.registerTool({
          name: 'solicitar_cotizacion_gas',
          description: 'Genera un requerimiento técnico para cotización o visita urgente con el instalador autorizado SEC Domingo Isaín (detección de fugas con gas trazador, sellado Prodoral R6-1 sin picar, Sello Verde SEC o conversión de gas).',
          parameters: quoteSchema,
          inputSchema: quoteSchema,
          execute: async function (params) {
            const p = params || {};
            const baseText = `Hola Instalgas Chile, necesito atención técnica con Domingo Isaín (SEC).\n- *Servicio:* ${p.servicio || 'General'}\n- *Comuna:* ${p.comuna || 'Santiago'}\n- *Urgencia:* ${p.urgencia || 'Normal'}${p.detalles ? `\n- *Detalle:* ${p.detalles}` : ''}`;
            const targetUrl = `https://wa.me/56949877316?text=${encodeURIComponent(baseText)}`;
            return {
              status: 'success',
              message: 'Solicitud técnica estructurada correctamente.',
              whatsapp_url: targetUrl,
              telefono_urgencias: '+56 9 4987 7316',
              director_tecnico: 'Domingo Isaín Plaza Caamaño',
              licencia_sec: 'Instalador Autorizado SEC Clase 3'
            };
          }
        });

        const secSchema = {
          type: 'object',
          properties: {}
        };

        mc.registerTool({
          name: 'verificar_licencia_sec',
          description: 'Obtiene los datos oficiales de certificación SEC del Director Técnico Domingo Isaín Plaza Caamaño y el enlace de verificación en el portal oficial de la SEC del Gobierno de Chile.',
          parameters: secSchema,
          inputSchema: secSchema,
          execute: async function () {
            return {
              nombre: 'Domingo Isaín Plaza Caamaño',
              rut: '12.738.961-6',
              licencia: 'Instalador Autorizado SEC Clase 3',
              estado: 'ACTIVO',
              normativas_aplicables: ['DS 191', 'DS 66', 'DS 222', 'DS 20', 'DS 67'],
              portal_validacion_url: 'https://wlhttp.sec.cl/rnii/public/licencia/qr?o=285eb263edf5cb049f3f4cc7fa0d2182'
            };
          }
        });
      } catch (err) {
        console.debug('WebMCP registration error:', err);
      }
    }
  }

  function scheduleInit() {
    if ('requestIdleCallback' in window) {
      window.requestIdleCallback(initApp, { timeout: 1000 });
    } else {
      setTimeout(initApp, 10);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', scheduleInit);
  } else {
    scheduleInit();
  }
})();
