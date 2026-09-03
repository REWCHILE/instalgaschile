<?php
/**
 * Página: Nosotros / Trayectoria y Respaldo
 * Instalgas Chile - https://instalgaschile.cl/nosotros
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$nosotros_faqs = [
    [
        'question' => '¿Quién dirige técnicamente a Instalgas Chile?',
        'answer' => 'Instalgas Chile es dirigida en terreno y de forma técnica por el Instalador Autorizado SEC Clase 3 <strong>' . DIRECTOR_NAME . '</strong> (RUT: ' . DIRECTOR_RUT . '), quien cuenta con más de 40 años de oficio en gasfitería e instalaciones de gas y acreditación formal continua ante la SEC desde el año 2012 bajo el Decreto Supremo N° 191.'
    ],
    [
        'question' => '¿Qué cobertura y disponibilidad ofrece Instalgas Chile?',
        'answer' => 'Atendemos a lo largo de toda la Región Metropolitana (Las Condes, Providencia, Santiago Centro, Vitacura, Ñuñoa, La Reina, Maipú, La Florida, Colina/Chicureo, entre otras) y servicios especializados en la Región de Valparaíso, con servicio de emergencia y urgencias operativas las 24 horas del día, los 7 días de la semana.'
    ],
    [
        'question' => '¿Qué respaldo legal entrega la empresa al finalizar una intervención?',
        'answer' => 'Toda obra de reparación, regularización o diseño cuenta con boleta o factura legal, protocolo formal de prueba de hermeticidad con manómetro calibrado, informe técnico con firma y RUT del instalador SEC, y tramitación de Declaración TC6 cuando el proyecto lo amerite.'
    ]
];

$seo_config = [
    'title' => 'Nosotros | Trayectoria, Respaldo e Instalador Autorizado SEC | Instalgas Chile',
    'description' => 'Conozca a Instalgas Chile y a su Director Técnico Domingo Isaín Plaza Caamaño, Instalador Autorizado SEC Clase 3 con más de 40 años de experiencia técnica.',
    'keywords' => 'nosotros instalgas chile, domingo isain plaza caamaño, instalador gas autorizado sec, trayectoria gasfiter santiago, empresa de gas certificada sec',
    'canonical' => SITE_URL . '/nosotros',
    'image' => SITE_URL . '/assets/img/domingo-isain-plaza.jpg',
    'type' => 'website',
    'faqs' => $nosotros_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Nosotros', 'url' => SITE_URL . '/nosotros']
    ]
];

$current_page = 'nosotros';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <!-- Hero de la Página Nosotros -->
  <section class="hero" aria-label="Presentación de Instalgas Chile y Director Técnico">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="hero-tagline">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span>Trayectoria Comprobada • Certificado SEC desde 2012</span>
          </div>

          <h1 class="hero-title">
            Más de 40 Años de Oficio y Respaldo Técnico Autorizado SEC
          </h1>

          <p class="hero-subtitle">
            En <strong>Instalgas Chile</strong> creemos que la seguridad en las redes de gas de un hogar o edificio no admite atajos ni improvisaciones. Combinamos cuatro décadas de oficio técnico en gasfitería con la rigurosidad legal exigida por el Estado de Chile.
          </p>

          <div class="hero-ctas">
            <a href="<?= get_whatsapp_url('Hola Domingo Isaín, me contacto desde la sección Nosotros para solicitar una cotización.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
              <span>Contactar a Domingo Isaín (+56 9 4987 7316)</span>
            </a>
            <a href="tel:+<?= PHONE_RAW ?>" class="btn btn-outline" style="color:#ffffff; border-color:#ffffff;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Llamar Directo</span>
            </a>
          </div>
        </div>

        <!-- Tarjeta Oficial de Domingo y Validación QR -->
        <div class="hero-credential-wrapper">
          <div class="credential-card">
            <div class="credential-header">
              <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" class="sec-stamp" style="text-decoration:none;" title="Verificar Certificado SEC Oficial">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>LICENCIA SEC OFICIAL &nearr;</span>
              </a>
              <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" style="background:#10b981; color:#ffffff; font-size:0.75rem; font-weight:800; padding:3px 8px; border-radius:4px; text-decoration:none;">
                ESTADO: ACTIVO &check;
              </a>
            </div>

            <div class="credential-body" style="display:flex; gap:1.25rem; align-items:center; margin-bottom:1.25rem;">
              <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" title="Validar en la SEC" style="display:block; flex-shrink:0; width:135px; height:135px;">
                <img src="<?= SITE_URL ?>/assets/img/domingo-isain-plaza.webp" alt="Instalador Autorizado SEC Domingo Isaín Plaza Caamaño RUT 12.738.961-6" class="credential-photo" width="135" height="135" fetchpriority="high" style="width:135px; height:135px; min-width:135px; aspect-ratio:1/1; object-fit:cover; border-radius:12px; border:3px solid #0284c7; box-shadow:0 4px 14px rgba(2,132,199,0.2); cursor:pointer; display:block;">
              </a>
              <div class="credential-details" style="flex:1;">
                <div class="credential-name" style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 800; color: var(--primary-blue); margin-bottom: 0.25rem; line-height:1.2;"><?= DIRECTOR_NAME ?></div>
                <div class="credential-rut" style="display:flex; align-items:center; gap:0.5rem; flex-wrap:wrap; margin-bottom:0.4rem;">
                  <span style="font-weight:700; color:#1e293b; font-size:0.95rem;">RUT: <?= DIRECTOR_RUT ?></span>
                  <span style="background:#ecfdf5; color:#059669; font-weight:800; font-size:0.75rem; padding:2px 8px; border-radius:4px; border:1px solid #a7f3d0;">Clase 3 (DS 191)</span>
                </div>
                <div class="credential-role" style="font-size:0.875rem; color:#475569; line-height:1.45;">
                  Instalador Autorizado de Gas Clase 3 ante la SEC (desde 2012). Más de 40 años de oficio técnico y más de 40.000 servicios ejecutados con éxito.
                </div>
              </div>
            </div>

            <!-- Código QR Oficial -->
            <div class="credential-qr-box" style="background:#f0f9ff; border:1px solid #bae6fd; border-radius:8px; padding:0.85rem; margin:1rem 0; display:flex; align-items:center; gap:1rem;">
              <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" title="Haga clic para validar el código QR oficial en el portal de la SEC" style="display:block; flex-shrink:0;">
                <img src="<?= SITE_URL ?>/assets/img/qr-sec-domingo-isain.webp" alt="Código QR de Validación Oficial SEC Domingo Isaín Plaza Caamaño" width="110" height="110" style="width:110px; height:110px; border-radius:6px; border:2px solid #0284c7; background:#ffffff; display:block; padding:4px; box-shadow:0 2px 6px rgba(2,132,199,0.15); cursor:pointer;">
              </a>
              <div style="flex:1;">
                <div style="font-size:0.75rem; font-weight:800; color:#0369a1; text-transform:uppercase; letter-spacing:0.04em; margin-bottom:0.2rem;">Verificación Oficial SEC</div>
                <div style="font-weight:700; font-size:0.95rem; color:var(--primary-blue); line-height:1.2; margin-bottom:0.3rem;">Código QR de Licencia</div>
                <p style="font-size:0.78rem; color:#475569; line-height:1.35; margin:0 0 0.4rem 0;">Escanee con su cámara o haga clic aquí para comprobar la vigencia activa en sec.cl</p>
                <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" style="font-size:0.85rem; font-weight:700; color:#0284c7; text-decoration:underline; display:inline-flex; align-items:center; gap:0.25rem;">
                  <span>Abrir Certificado Oficial SEC &nearr;</span>
                </a>
              </div>
            </div>

            <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline" style="width:100%; border-color:#0284c7; color:#0284c7; font-size:0.85rem; padding:0.6rem 1rem; margin-bottom:0.75rem; background:rgba(2,132,199,0.06); text-decoration:none; display:inline-flex; align-items:center; justify-content:center; gap:0.4rem;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
              <span>Ver Certificado SEC Oficial en Línea (Estado: ACTIVO) &nearr;</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Métricas Clave de Confianza -->
  <section class="section section-alt" style="padding: 2.5rem 0;">
    <div class="container">
      <div class="metrics-grid" style="margin: 0;">
        <div class="metric-card">
          <div class="metric-number highlight">+40.000</div>
          <div class="metric-title">Servicios Técnicos Ejecutados</div>
        </div>
        <div class="metric-card">
          <div class="metric-number">+40</div>
          <div class="metric-title">Años de Trayectoria en Oficio</div>
        </div>
        <div class="metric-card">
          <div class="metric-number">2012</div>
          <div class="metric-title">Acreditación SEC Ininterrumpida</div>
        </div>
        <div class="metric-card">
          <div class="metric-number highlight">24/7</div>
          <div class="metric-title">Disponibilidad para Urgencias</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Historia y Filosofía de Trabajo -->
  <section class="section">
    <div class="container" style="max-width: 900px;">
      <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
        <span class="section-badge">Nuestra Identidad</span>
        <h2>¿Quiénes Somos y Cómo Trabajamos?</h2>
      </div>

      <div style="font-size: 1.05rem; color: #334155; line-height: 1.8; display: flex; flex-direction: column; gap: 1.25rem;">
        <p>
          <strong>Instalgas Chile</strong> nació como una respuesta a la necesidad de profesionalizar de forma real el servicio de gas en la Región Metropolitana y la V Región. Durante décadas, miles de familias y administraciones de edificios han sufrido malas prácticas, presupuestos inflados o soluciones parche aplicadas por gásfiteres no autorizados que no asumen responsabilidad legal ante un siniestro.
        </p>
        <p>
          Bajo el liderazgo de <strong><?= DIRECTOR_NAME ?></strong>, Instalador Autorizado SEC Clase 3 (RUT: <?= DIRECTOR_RUT ?>), combinamos más de 40 años de oficio técnico en instalaciones sanitarias y térmicas con la acreditación formal de la Superintendencia de Electricidad y Combustibles (SEC) otorgada desde 2012 bajo el <strong>Decreto Supremo N° 191</strong>.
        </p>
      </div>

      <!-- Cuadrícula de Pilares de Valor -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem; margin-top: 2.5rem;">
        <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; box-shadow: var(--shadow-sm);">
          <div style="color: var(--accent-red); margin-bottom: 0.75rem;">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 style="font-size: 1.15rem; color: var(--primary-blue); margin-bottom: 0.5rem;">1. Seguridad y Legalidad Plena</h3>
          <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.5;">Cada intervención se ejecuta bajo estricta normativa SEC (DS 66, DS 222, DS 20 y DS 67), protegiendo la vigencia de sus seguros y evitando cortes de suministro.</p>
        </div>

        <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; box-shadow: var(--shadow-sm);">
          <div style="color: var(--primary-blue); margin-bottom: 0.75rem;">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24"/><path d="m14.83 9.17 4.24-4.24"/><path d="m14.83 14.83 4.24 4.24"/><path d="m9.17 14.83-4.24 4.24"/></svg>
          </div>
          <h3 style="font-size: 1.15rem; color: var(--primary-blue); margin-bottom: 0.5rem;">2. Tecnología Sin Demolición</h3>
          <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.5;">Pioneros en la localización electrónica con gas trazador y el sellado polimérico interior Prodoral R6-1, evitando picar cerámicas, porcelanatos o pisos flotantes.</p>
        </div>

        <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; box-shadow: var(--shadow-sm);">
          <div style="color: #10b981; margin-bottom: 0.75rem;">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h3 style="font-size: 1.15rem; color: var(--primary-blue); margin-bottom: 0.5rem;">3. Informes y Proyectos TC6</h3>
          <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.5;">Facultad oficial para emitir protocolos de hermeticidad, suscribir declaraciones TC6 ante la SEC y tramitar la obtención o recuperación del Sello Verde.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Marco Normativo por Año de Construcción -->
  <section class="section section-alt">
    <div class="container" style="max-width: 900px;">
      <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
        <span class="section-badge">Criterio Técnico Oficial</span>
        <h2>Marco Legal y Decretos Supremos Aplicables</h2>
        <p>No todas las propiedades se rigen por la misma norma. Aplicamos el marco jurídico exacto que le corresponde según el año de edificación:</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 1rem;">
        <div style="background: #ffffff; border-left: 4px solid #f59e0b; border-radius: 0 8px 8px 0; padding: 1.25rem 1.5rem; box-shadow: var(--shadow-sm);">
          <h3 style="color: var(--primary-blue); font-size: 1.1rem; margin-bottom: 0.25rem;">Decreto Supremo N° 222 (Instalaciones Anteriores a 2007)</h3>
          <p style="font-size: 0.9rem; color: var(--text-muted); margin: 0;">Protege a las viviendas e inmuebles construidos antes del 2007, impidiendo que entidades fiscalizadoras apliquen exigencias retroactivas inaplicables.</p>
        </div>

        <div style="background: #ffffff; border-left: 4px solid var(--primary-blue); border-radius: 0 8px 8px 0; padding: 1.25rem 1.5rem; box-shadow: var(--shadow-sm);">
          <h3 style="color: var(--primary-blue); font-size: 1.1rem; margin-bottom: 0.25rem;">Decretos Supremos N° 66 y N° 20 (Desde 2007 en Adelante)</h3>
          <p style="font-size: 0.9rem; color: var(--text-muted); margin: 0;">Reglamento técnico de instalaciones interiores, trazados de cobre, ventilaciones superiores/inferiores y conductos colectivos de tiro forzado.</p>
        </div>

        <div style="background: #ffffff; border-left: 4px solid #10b981; border-radius: 0 8px 8px 0; padding: 1.25rem 1.5rem; box-shadow: var(--shadow-sm);">
          <h3 style="color: var(--primary-blue); font-size: 1.1rem; margin-bottom: 0.25rem;">Decreto Supremo N° 191 (Acreditación de Instaladores de Gas)</h3>
          <p style="font-size: 0.9rem; color: var(--text-muted); margin: 0;">Establece las exigencias, exámenes y licencias estatales que avalan las competencias técnicas de Domingo Isaín Plaza Caamaño como instalador Clase 3.</p>
        </div>

        <div style="background: #ffffff; border-left: 4px solid #0284c7; border-radius: 0 8px 8px 0; padding: 1.25rem 1.5rem; box-shadow: var(--shadow-sm);">
          <h3 style="color: var(--primary-blue); font-size: 1.1rem; margin-bottom: 0.25rem;">Decreto Supremo N° 67 (Redes Exteriores y Empalmes)</h3>
          <p style="font-size: 0.9rem; color: var(--text-muted); margin: 0;">Norma las matrices de distribución de Metrogas, Lipigas, Abastible y Gasco con las cuales coordinamos empalmes y habilitación de medidores.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Inclusión de Preguntas Frecuentes -->
  <?php 
  $faq_list = $nosotros_faqs;
  require __DIR__ . '/includes/faq-section.php'; 
  ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
