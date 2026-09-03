<?php
/**
 * Footer Global - Instalgas Chile
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
  <!-- Footer Principal -->
  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <!-- Columna 1: Identidad y Respaldo Técnico -->
        <div class="footer-col">
          <div class="brand-wrapper" style="margin-bottom: 1.25rem;">
            <img src="<?= SITE_URL ?>/assets/img/logo-instalgas.webp" alt="Sello Gásfiter Certificado SEC Instalgas Chile" width="50" height="50" loading="lazy" style="border-radius:50%;">
            <div class="brand-text">
              <span class="brand-title" style="color:#ffffff;">INSTALGAS <span style="color:#f87171;">CHILE</span></span>
              <span class="brand-subtitle" style="color:#34d399;">Autorizado SEC DS 191</span>
            </div>
          </div>
          <p style="font-size:0.9rem; color:#94a3b8; line-height:1.6;">
            Empresa técnica especializada en instalaciones de gas, detección de fugas sin picar con gas trazador y normalización para Sello Verde SEC. Liderada por el instalador oficial <strong><?= DIRECTOR_NAME ?></strong> (RUT: <?= DIRECTOR_RUT ?>).
          </p>
          <div style="margin-top:1rem; display:inline-flex; align-items:center; gap:0.5rem; background:rgba(255,255,255,0.05); padding:0.5rem 0.8rem; border-radius:6px; border:1px solid rgba(255,255,255,0.1);">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#34d399" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span style="font-size:0.8rem; color:#e2e8f0;">+40 años de trayectoria | +40.000 trabajos</span>
          </div>
          <div style="margin-top: 0.75rem;">
            <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" style="display:inline-flex; align-items:center; gap:0.4rem; color:#38bdf8; font-size:0.85rem; text-decoration:none; font-weight:600;">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
              <span>Verificar Licencia SEC Oficial (Estado: ACTIVO) &nearr;</span>
            </a>
          </div>
        </div>

        <!-- Columna 2: Servicios Especializados -->
        <div class="footer-col">
          <h3>Servicios Principales</h3>
          <ul class="footer-links">
            <li><a href="<?= SITE_URL ?>/deteccion-fugas-gas">Detección de Fugas sin Romper</a></li>
            <li><a href="<?= SITE_URL ?>/certificacion-sec">Certificación y Sello Verde SEC</a></li>
            <li><a href="<?= SITE_URL ?>/servicios#prodoral">Sellado con Prodoral R6-1</a></li>
            <li><a href="<?= SITE_URL ?>/servicios#redes">Instalación de Redes Gas Natural y GLP</a></li>
            <li><a href="<?= SITE_URL ?>/servicios#calefont">Reparación de Calefont y Calderas</a></li>
            <li><a href="<?= SITE_URL ?>/servicios#urgencias">Atención de Emergencias 24/7</a></li>
          </ul>
        </div>

        <!-- Columna 3: Enlaces Rápidos y Navegación -->
        <div class="footer-col">
          <h3>Navegación Rápida</h3>
          <ul class="footer-links">
            <li><a href="<?= SITE_URL ?>/">Inicio</a></li>
            <li><a href="<?= SITE_URL ?>/certificacion-sec">¿Por qué elegir instalador SEC?</a></li>
            <li><a href="<?= SITE_URL ?>/servicios">Catálogo de Servicios</a></li>
            <li><a href="<?= SITE_URL ?>/contacto">Contacto y Presupuestos</a></li>
            <li><a href="<?= SITE_URL ?>/sitemap.xml">Mapa del Sitio (Sitemap)</a></li>
            <li><a href="<?= SITE_URL ?>/llms.txt">Ficha para Motores IA (llms.txt)</a></li>
          </ul>
        </div>

        <!-- Columna 4: Contacto Directo y Urgencias -->
        <div class="footer-col">
          <h3>Atención Inmediata</h3>
          <div class="footer-contact-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <div>
              <strong>Llamadas y Urgencias:</strong><br>
              <a href="tel:+<?= PHONE_RAW ?>" style="color:#ffffff; font-weight:700;"><?= PHONE_DISPLAY ?></a>
            </div>
          </div>
          <div class="footer-contact-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#25d366" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
            <div>
              <strong>WhatsApp Directo:</strong><br>
              <a href="<?= WHATSAPP_BASE_URL ?>" target="_blank" rel="noopener noreferrer" style="color:#86efac; font-weight:700;">+<?= PHONE_RAW ?></a>
            </div>
          </div>
          <div class="footer-contact-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <div>
              <strong>Casa Matriz:</strong><br>
              <span><?= CENTRAL_ADDRESS ?></span>
            </div>
          </div>
          <div style="margin-top:1.25rem;">
            <a href="<?= get_whatsapp_url('Hola Instalgas Chile, necesito una visita técnica urgente.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm" style="width:100%;">
              Solicitar Visita por WhatsApp
            </a>
          </div>
        </div>
      </div>

      <!-- Barra Inferior de Copyright -->
      <div class="footer-bottom" style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem;">
        <div>
          &copy; <?= date('Y') ?> <strong><?= SITE_NAME ?> &reg;</strong> – Gasfiter Certificado SEC en Chile - Desarrollado por <a href="https://www.rew.cl/" target="_blank" rel="noopener noreferrer" style="color:#94a3b8; text-decoration:underline;">REW</a>
        </div>
        <div style="font-size:0.85rem; color:#64748b;">
          Todos los derechos reservados.
        </div>
      </div>
    </div>
  </footer>

  <!-- Botón Flotante de WhatsApp con Micro-animación de Pulso -->
  <a href="<?= get_whatsapp_url('Hola Domingo Isaín, me contacto desde la web instalgaschile.cl para una consulta técnica.') ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp" aria-label="Contactar directamente por WhatsApp con el instalador SEC Domingo Isaín">
    <div class="pulse-effect"></div>
    <span class="whatsapp-unread-badge">1</span>
    <svg width="34" height="34" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
      <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/>
    </svg>
  </a>

  <!-- Barra Fija para Móviles (Llamada + WhatsApp) -->
  <aside class="mobile-action-bar" aria-label="Acciones rápidas en teléfono móvil">
    <a href="tel:+<?= PHONE_RAW ?>" class="mobile-action-btn mobile-btn-phone">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      <span>Llamar Ahora</span>
    </a>
    <a href="<?= get_whatsapp_url('Hola Domingo Isaín, necesito atención inmediata por un servicio de gas.') ?>" target="_blank" rel="noopener noreferrer" class="mobile-action-btn mobile-btn-wa">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
      <span>WhatsApp SEC</span>
    </a>
  </aside>
</body>
</html>
