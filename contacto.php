<?php
/**
 * Página de Contacto y Urgencias - Instalgas Chile
 * https://instalgaschile.cl/contacto
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$contacto_faqs = [
    [
        'question' => '¿Cuál es el medio más rápido para solicitar una atención urgente por fuga de gas?',
        'answer' => 'El canal más expedito es nuestro WhatsApp directo al <strong>+56 9 4987 7316</strong> o llamada telefónica directa. Nuestro equipo técnico responde de inmediato las 24 horas del día, los 7 días de la semana.'
    ],
    [
        'question' => '¿Cuáles son los medios de pago aceptados para los servicios?',
        'answer' => 'Aceptamos transferencias electrónicas bancarias, tarjetas de débito y crédito (mediante sistema de pago digital seguro), y efectivo. Entregamos boleta o factura electrónica al término del trabajo.'
    ],
    [
        'question' => '¿Cobran por la visita técnica y diagnóstico en terreno?',
        'answer' => 'La visita de diagnóstico tiene un valor base según la comuna en Santiago o V Región, el cual se abona íntegramente al presupuesto final en caso de aprobar la ejecución del trabajo de reparación o regularización.'
    ]
];

$seo_config = [
    'title' => 'Contacto y Urgencias 24/7 de Gas | Instalgas Chile (+56 9 4987 7316)',
    'description' => 'Comuníquese directamente con el instalador autorizado SEC Domingo Isaín. Atención de emergencias 24 horas en Santiago y V Región. WhatsApp y teléfono.',
    'keywords' => 'contacto gasfiter santiago, emergencias de gas 24/7 santiago, telefono gasfiter sec santiago, domingo isain whatsapp',
    'canonical' => SITE_URL . '/contacto',
    'image' => SITE_URL . '/assets/img/og-instalgas-share.jpg',
    'type' => 'website',
    'faqs' => $contacto_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Contacto', 'url' => SITE_URL . '/contacto']
    ]
];

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <!-- Migas de pan -->
  <div class="container breadcrumbs" aria-label="Migas de pan">
    <a href="<?= SITE_URL ?>/">Inicio</a>
    <span>&rsaquo;</span>
    <strong>Contacto y Presupuestos</strong>
  </div>

  <section class="section" style="padding-top: 1.5rem;">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Atención Rápida y Garantizada</span>
        <h1>Canales Oficiales de Contacto y Urgencias</h1>
        <p>Estamos disponibles las 24 horas para resolver emergencias de gas, fugas, regularizaciones y mantenciones en toda la Región Metropolitana y V Región.</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 3rem; align-items: flex-start;">
        <!-- Información de Contacto Directa -->
        <div>
          <div class="contact-card" style="margin-bottom: 2rem;">
            <h3 style="color:var(--primary-blue); font-size:1.4rem; margin-bottom:1.5rem; border-bottom:2px solid var(--border-color); padding-bottom:0.75rem;">
              Datos de la Empresa
            </h3>

            <div style="display:flex; flex-direction:column; gap:1.25rem;">
              <div style="display:flex; align-items:flex-start; gap:1rem;">
                <div style="width:44px; height:44px; border-radius:50%; background:#25d366; color:#ffffff; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
                </div>
                <div>
                  <div style="font-size:0.85rem; color:#64748b; font-weight:600;">WHATSAPP 24/7</div>
                  <a href="<?= WHATSAPP_BASE_URL ?>" target="_blank" rel="noopener noreferrer" style="font-size:1.2rem; font-weight:700; color:#15803d;">
                    <?= PHONE_DISPLAY ?>
                  </a>
                </div>
              </div>

              <div style="display:flex; align-items:flex-start; gap:1rem;">
                <div style="width:44px; height:44px; border-radius:50%; background:var(--primary-blue); color:#ffffff; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div>
                  <div style="font-size:0.85rem; color:#64748b; font-weight:600;">LLAMADAS DIRECTAS</div>
                  <a href="tel:+<?= PHONE_RAW ?>" style="font-size:1.2rem; font-weight:700; color:var(--primary-blue);">
                    <?= PHONE_DISPLAY ?>
                  </a>
                </div>
              </div>

              <div style="display:flex; align-items:flex-start; gap:1rem;">
                <div style="width:44px; height:44px; border-radius:50%; background:var(--accent-red); color:#ffffff; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div>
                  <div style="font-size:0.85rem; color:#64748b; font-weight:600;">DIRECCIÓN CENTRAL</div>
                  <div style="font-size:0.95rem; font-weight:600; color:var(--text-dark);">
                    <?= CENTRAL_ADDRESS ?>
                  </div>
                </div>
              </div>

              <div style="display:flex; align-items:flex-start; gap:1rem;">
                <div style="width:44px; height:44px; border-radius:50%; background:#0284c7; color:#ffffff; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <div>
                  <div style="font-size:0.85rem; color:#64748b; font-weight:600;">CORREO ELECTRÓNICO</div>
                  <a href="mailto:<?= CONTACT_EMAIL ?>" style="font-size:0.95rem; font-weight:600; color:var(--primary-blue);">
                    <?= CONTACT_EMAIL ?>
                  </a>
                </div>
              </div>
            </div>

            <div style="margin-top:2rem; padding-top:1.5rem; border-top:1px solid var(--border-color);">
              <div style="font-size:0.85rem; color:#64748b; margin-bottom:0.5rem;">INSTALADOR A CARGO:</div>
              <div style="font-weight:700; color:var(--primary-blue); font-size:1.1rem;"><?= DIRECTOR_NAME ?></div>
              <div style="font-size:0.9rem; color:var(--accent-red); font-weight:600;">RUT: <?= DIRECTOR_RUT ?> • Certificado SEC Clase 1</div>
            </div>
          </div>
        </div>

        <!-- Formulario Rápido a WhatsApp -->
        <div>
          <div class="contact-card">
            <h3 style="color:var(--primary-blue); font-size:1.4rem; margin-bottom:1rem;">
              Formulario de Diagnóstico Inmediato
            </h3>
            <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:1.5rem;">
              Envíenos sus requerimientos y recibirá atención técnica directa de Domingo Isaín vía WhatsApp:
            </p>

            <form id="quickQuoteForm">
              <div class="form-group">
                <label for="formService" class="form-label">Servicio Requerido *</label>
                <select id="formService" class="form-control" required>
                  <option value="Detección de Fugas con Gas Trazador">Detección de Fugas con Gas Trazador</option>
                  <option value="Sellado con Prodoral R6-1 sin Romper">Sellado con Prodoral R6-1 sin Romper</option>
                  <option value="Certificación SEC / Sello Verde">Certificación SEC / Sello Verde</option>
                  <option value="Regularización de Sello Rojo / Corte de Gas">Regularización de Sello Rojo / Corte de Gas</option>
                  <option value="Mantención / Reparación de Calefont">Mantención / Reparación de Calefont</option>
                  <option value="Instalación de Red de Cobre Nueva">Instalación de Red de Cobre Nueva</option>
                  <option value="Urgencia 24 Horas">Urgencia 24 Horas</option>
                </select>
              </div>

              <div class="form-group">
                <label for="formCommune" class="form-label">Comuna o Ciudad *</label>
                <input type="text" id="formCommune" class="form-control" placeholder="Ej: Providencia, Las Condes, Santiago Centro..." required>
              </div>

              <div class="form-group">
                <label for="formUrgency" class="form-label">Nivel de Urgencia</label>
                <select id="formUrgency" class="form-control">
                  <option value="Urgente - Emergencia Hoy">Urgente - Emergencia Hoy</option>
                  <option value="Para esta semana">Para esta semana</option>
                  <option value="Consulta o presupuesto previo">Consulta o presupuesto previo</option>
                </select>
              </div>

              <div class="form-group">
                <label for="formComment" class="form-label">Descripción del Problema</label>
                <textarea id="formComment" class="form-control" rows="4" placeholder="Indique qué ocurre: olor a gas, rechazo en inspección SEC, calefont que no prende, etc."></textarea>
              </div>

              <button type="submit" class="btn btn-whatsapp btn-lg" style="width: 100%;">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
                <span>Conectar con Instalador SEC en WhatsApp</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Inclusión de FAQ -->
  <?php 
  $faq_list = $contacto_faqs;
  require __DIR__ . '/includes/faq-section.php'; 
  ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
