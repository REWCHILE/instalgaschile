<?php
/**
 * Portada Principal - Instalgas Chile
 * https://instalgaschile.cl
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

// Definición de FAQs para concordancia estricta DOM <-> JSON-LD
$page_faqs = [
    [
        'question' => '¿Por qué es obligatorio contratar a un instalador certificado por la SEC y no a un gásfiter aficionado?',
        'answer' => 'El gas es un elemento de alto riesgo. En Chile, el Decreto Supremo N° 66 del Ministerio de Economía exige que toda instalación, reparación o modificación de redes de gas sea efectuada exclusivamente por un instalador autorizado por la SEC (Superintendencia de Electricidad y Combustibles). Contratar a un técnico sin certificación anula las pólizas de seguro de hogar, arriesga cortes de suministro por parte de Metrogas, Lipigas, Abastible o Gasco, expone a su familia a intoxicación por monóxido de carbono o explosiones, e impide la obtención del Sello Verde obligatorio.'
    ],
    [
        'question' => '¿Cómo detectan una fuga de gas si es invisible y cómo la reparan sin romper pisos ni paredes?',
        'answer' => 'En Instalgas Chile utilizamos tecnología no invasiva de última generación: inyectamos gas trazador inocuo (mezcla no inflamable de nitrógeno e hidrógeno) y rastreamos con sensores de ultrasonido y geófonos electroacústicos, localizando el punto exacto con precisión milimétrica. Para reparar sin picar baldosas, porcelanatos ni muros, aplicamos el polímero alemán <strong>Prodoral R6-1</strong>, el cual sella herméticamente todas las microfisuras y uniones interiores de la cañería desde adentro, con certificación europea y garantía total.'
    ],
    [
        'question' => '¿Qué es el polímero Prodoral R6-1 y qué garantía ofrece en redes de gas?',
        'answer' => 'Prodoral R6-1 es una solución química líquida de tecnología alemana diseñada específicamente para sellar cañerías de gas en edificaciones sin necesidad de demolición. Se introduce a presión controlada en el circuito de gas, penetrando en las roscas y microporosidades, solidificando en una película elástica permanente resistente a la presión. Ofrecemos garantía técnica por escrito y prueba de hermeticidad con manómetro calibrado ante la presencia del cliente.'
    ],
    [
        'question' => '¿Qué trámite o reparación se realiza para pasar de Sello Rojo o Amarillo a Sello Verde SEC?',
        'answer' => 'Cuando una entidad inspectora otorga Sello Rojo (peligro inminente) o Sello Amarillo (observaciones con plazo), entregamos el informe técnico detallado. Nuestro instalador SEC Clase 1, Domingo Isaín, subsana cada una de las no conformidades (ventilaciones deficientes, cañerías fuera de norma, artefactos sin conducto de evacuación o fugas), emite el formulario de regularización correspondiente y coordina la reinspección para otorgar el Sello Verde oficial ante la SEC.'
    ],
    [
        'question' => '¿Cuánto tardan en atender una emergencia de fuga o corte de suministro de gas en Santiago?',
        'answer' => 'Contamos con cuadrillas de urgencia 24/7 operativas en toda la Región Metropolitana (Las Condes, Vitacura, Providencia, Ñuñoa, Santiago Centro, Lo Barnechea, La Reina, entre otras) y en la V Región (Viña del Mar, Valparaíso). El tiempo promedio de respuesta para situaciones críticas es de 45 a 90 minutos según la ubicación.'
    ],
    [
        'question' => '¿Realizan conversión de artefactos y empalmes de Gas Licuado (balón/estanque) a Gas Natural (Metrogas)?',
        'answer' => 'Sí, realizamos el proyecto completo de conversión: cambio de inyectores en cocinas, encimeras, hornos, calefont y calderas, calibración de presiones de quemado, cálculo de diámetros de cañería en cobre y certificación técnica para empalmes a la red de gas natural.'
    ],
    [
        'question' => '¿Qué respaldo y documentos legales entregan al concluir el trabajo?',
        'answer' => 'Entregamos comprobante de atención con número de registro SEC del instalador Domingo Isaín Plaza Caamaño (RUT: 12.738.961-6), protocolo de prueba de hermeticidad, boleta o factura electrónica, y certificado de garantía del servicio prestado.'
    ]
];

$seo_config = [
    'title' => 'Gasfiter Certificado SEC en Santiago | Instalgas Chile - Urgencias 24/7',
    'description' => 'Instalador de gas certificado SEC en Santiago. Detección no invasiva de fugas con gas trazador, sellado Prodoral R6-1 sin romper y certificación Sello Verde.',
    'keywords' => 'gasfiter certificado sec, instalador de gas santiago, deteccion de fugas de gas, reparacion fugas sin picar, prodoral r6-1 chile, sello verde sec santiago, domingo isain plaza caamaño',
    'canonical' => SITE_URL . '/',
    'image' => SITE_URL . '/assets/img/og-instalgas-share.jpg',
    'type' => 'website',
    'faqs' => $page_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/']
    ]
];

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <!-- Hero Section con Respaldo de Credencial SEC -->
  <section class="hero" aria-label="Presentación de Instalgas Chile">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="hero-tagline">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#34d399" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span>Instalador Autorizado SEC Clase 1 • Norma DS 66</span>
          </div>
          <h1 class="hero-title">
            Gasfiter Certificado SEC en Santiago y Detección de Fugas <span class="highlight">Sin Romper Pisos</span>
          </h1>
          <p class="hero-subtitle">
            Especialistas en detección no destructiva con <strong>Gas Trazador y Geófono</strong>, sellado químico permanente con <strong>Prodoral R6-1</strong> y regularización oficial para <strong>Sello Verde SEC</strong>. Atención inmediata las 24 horas.
          </p>

          <div class="hero-ctas">
            <a href="<?= get_whatsapp_url('Hola Domingo Isaín, necesito atención técnica urgente en mi domicilio o empresa.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg" aria-label="Escribir por WhatsApp a Domingo Isaín al +56 9 4987 7316">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
              <span>Urgencias WhatsApp: <?= PHONE_DISPLAY ?></span>
            </a>
            <a href="tel:+<?= PHONE_RAW ?>" class="btn btn-outline" style="color:#ffffff; border-color:#ffffff;" aria-label="Llamar directamente al teléfono +56 9 4987 7316">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Llamada Directa</span>
            </a>
          </div>

          <div class="hero-badges-strip">
            <div class="hero-badge-item">
              <svg class="hero-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>Llegada en 45-90 min</span>
            </div>
            <div class="hero-badge-item">
              <svg class="hero-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>Garantía por Escrito</span>
            </div>
            <div class="hero-badge-item">
              <svg class="hero-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
              <span>Sin Romper Cerámicas</span>
            </div>
          </div>
        </div>

        <!-- Tarjeta de Verificación Oficial SEC -->
        <div class="hero-credential-wrapper">
          <div class="credential-card">
            <div class="credential-header">
              <div class="sec-stamp">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>CERTIFICADO SEC OFICIAL</span>
              </div>
              <img src="<?= SITE_URL ?>/assets/img/sec-validacion-qr-badge.webp" alt="Código de Verificación Superintendencia de Electricidad y Combustibles SEC" width="73" height="31" loading="lazy" style="border-radius:4px; border:1px solid #e2e8f0; width:73px; height:31px; object-fit:contain;">
            </div>

            <div class="credential-body">
              <img src="<?= SITE_URL ?>/assets/img/credencial-sec-domingo-isain.webp" alt="Credencial Oficial SEC de Domingo Isaín Plaza Caamaño RUT 12.738.961-6" class="credential-photo" width="110" height="110" fetchpriority="high" style="width:110px; height:110px; object-fit:cover;">
              <div class="credential-details">
                <div class="credential-name" style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 700; color: var(--primary-blue); margin-bottom: 0.2rem;"><?= DIRECTOR_NAME ?></div>
                <div class="credential-rut">RUT: <?= DIRECTOR_RUT ?></div>
                <div class="credential-role">
                  Instalador Autorizado de Gas Clase 1 ante la SEC Chile. Más de 40 años de trayectoria técnica y más de 40.000 servicios ejecutados con éxito.
                </div>
              </div>
            </div>

            <div class="credential-guarantees">
              <ul>
                <li>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Validado para emitir TC6 y tramitar Sello Verde</span>
                </li>
                <li>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Aprobado por Metrogas, Lipigas, Abastible y Gasco</span>
                </li>
                <li>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                  <span>Tecnología certificada Prodoral R6-1 sin demolición</span>
                </li>
              </ul>
            </div>

            <a href="<?= get_whatsapp_url('Hola Domingo Isaín, vi su credencial SEC y necesito coordinar una visita técnica.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
              <span>Consultar Directo al +56 9 4987 7316</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comparativa SEC vs Aficionados (Crucial para tráfico frío de Google) -->
  <section class="section section-alt" aria-labelledby="comparison-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Proteja su Hogar y su Inversión</span>
        <h2 id="comparison-heading">¿Por qué nunca debe contratar a un gásfiter sin certificación SEC?</h2>
        <p>
          Las instalaciones de gas involucran vidas humanas. Vea la diferencia entre confiar en un técnico autorizado por la ley chilena y arriesgarse con mano de obra informal.
        </p>
      </div>

      <div class="comparison-container">
        <!-- Columna SEC -->
        <article class="comparison-box comparison-sec">
          <h3 style="color: var(--sec-green-dark);">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            Instalgas Chile (Certificado SEC)
          </h3>
          <ul>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <div><strong>Habilitación Legal Plena:</strong> Instalador oficial SEC Clase 1 con carnet vigente y RUT visible (12.738.961-6).</div>
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <div><strong>Reparación Sin Destrozos:</strong> Detección con gas trazador y sellado con Prodoral R6-1 sin picar cerámicas ni losas.</div>
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <div><strong>Trámite y Sello Verde:</strong> Gestión de proyectos TC6, subsanación de Sello Rojo e inspecciones aprobadas.</div>
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <div><strong>Respaldo de Seguros:</strong> Validez legal ante compañías de seguros en caso de siniestros o inspecciones.</div>
            </li>
          </ul>
        </article>

        <!-- Columna No SEC -->
        <article class="comparison-box comparison-non-sec">
          <h3 style="color: var(--accent-red);">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            Gásfiter Aficionado / No Certificado
          </h3>
          <ul>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              <div><strong>Ilegalidad y Riesgo de Multas:</strong> No cuenta con registro SEC y transgrede el DS 66.</div>
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              <div><strong>Demolición Innecesaria:</strong> Pican pisos y paredes a ciegas multiplicando los costos de albañilería.</div>
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              <div><strong>Corte de Suministro:</strong> Metrogas o Lipigas cortarán la matriz por no contar con firma autorizada.</div>
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
              <div><strong>Sin Garantías:</strong> Desaparecen ante contingencias y no emiten informes válidos.</div>
            </li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- Servicios Principales -->
  <section class="section" id="servicios-destacados" aria-labelledby="services-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Especialidades Técnicas de Alto Nivel</span>
        <h2 id="services-heading">Soluciones Integrales en Gas y Redes Sanitarias</h2>
        <p>
          Diagnóstico milimétrico, equipamiento europeo y normativas SEC vigentes para casas, departamentos, comunidades y locales comerciales.
        </p>
      </div>

      <div class="services-grid">
        <!-- Tarjeta 1: Detección de Fugas -->
        <article class="service-card">
          <div class="service-icon-box">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M16 12a4 4 0 0 1-8 0"/></svg>
          </div>
          <h3 class="service-title">Detección de Fugas sin Romper</h3>
          <p class="service-desc">
            Localización de fugas de gas invisibles con gas trazador (formiergas) y geófono electroacústico. Precisión milimétrica sin picar baldosas ni muros.
          </p>
          <ul class="service-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Prueba manométrica de hermeticidad</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gas trazador no inflamable certificado</li>
          </ul>
          <a href="<?= SITE_URL ?>/deteccion-fugas-gas" class="btn btn-outline btn-sm">Ver Tecnología de Detección &rarr;</a>
        </article>

        <!-- Tarjeta 2: Sellado con Prodoral R6-1 -->
        <article class="service-card">
          <div class="service-icon-box">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
          </div>
          <h3 class="service-title">Sellado con Prodoral R6-1</h3>
          <p class="service-desc">
            Polímero alemán que sella desde el interior cañerías de gas con microfugas o porosidades. La alternativa definitiva para no demoler cerámicas.
          </p>
          <ul class="service-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Ahorro de hasta un 70% en obras civiles</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Garantía por escrito y sello hermético</li>
          </ul>
          <a href="<?= SITE_URL ?>/servicios#prodoral" class="btn btn-outline btn-sm">Conocer Prodoral R6-1 &rarr;</a>
        </article>

        <!-- Tarjeta 3: Sello Verde SEC -->
        <article class="service-card">
          <div class="service-icon-box">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
          </div>
          <h3 class="service-title">Certificación y Sello Verde SEC</h3>
          <p class="service-desc">
            Regularización de sellos rojos y amarillos en comunidades, casas y locales comerciales. Proyectos TC6 y aprobación ante empresas distribuidoras.
          </p>
          <ul class="service-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Subsanación de observaciones SEC</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Declaraciones ante la SEC</li>
          </ul>
          <a href="<?= SITE_URL ?>/certificacion-sec" class="btn btn-outline btn-sm">Trámite Sello Verde &rarr;</a>
        </article>

        <!-- Tarjeta 4: Instalaciones y Redes -->
        <article class="service-card">
          <div class="service-icon-box">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
          </div>
          <h3 class="service-title">Redes de Cobre y Conversiones</h3>
          <p class="service-desc">
            Instalación de cañerías de cobre soldadas con plata, empalmes de gas licuado (GLP) a gas natural (GN) y dimensionamiento técnico norma DS 66.
          </p>
          <ul class="service-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Soldadura fuerte con aleación de plata</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Conversión de cocinas, encimeras y calderas</li>
          </ul>
          <a href="<?= SITE_URL ?>/servicios#redes" class="btn btn-outline btn-sm">Ver Instalaciones &rarr;</a>
        </article>

        <!-- Tarjeta 5: Calefont y Calderas -->
        <article class="service-card">
          <div class="service-icon-box">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <h3 class="service-title">Calefont, Calderas y Tiro Forzado</h3>
          <p class="service-desc">
            Instalación, mantención preventiva y reparación de calefont ionizados, tiro forzado y calderas murales. Ajuste de combustión y evacuación de gases.
          </p>
          <ul class="service-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Medición de monóxido de carbono (CO)</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Conductos de evacuación certificados SEC</li>
          </ul>
          <a href="<?= SITE_URL ?>/servicios#calefont" class="btn btn-outline btn-sm">Servicio de Calefont &rarr;</a>
        </article>

        <!-- Tarjeta 6: Urgencias 24/7 -->
        <article class="service-card" style="border-top: 4px solid var(--accent-red);">
          <div class="service-icon-box" style="background: var(--accent-red); color:#ffffff;">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <h3 class="service-title" style="color: var(--accent-red);">Emergencias de Gas 24 Horas</h3>
          <p class="service-desc">
            ¿Olor a gas, corte de Metrogas o sello rojo inminente? Respuesta express en Santiago y V Región para neutralizar riesgos y restablecer el suministro.
          </p>
          <ul class="service-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Atención inmediata fines de semana y festivos</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Cuadrilla equipada con instrumental digital</li>
          </ul>
          <a href="<?= get_whatsapp_url('URGENCIA: Detecté olor a gas en mi domicilio y requiero asistencia inmediata.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">Solicitar Urgencia Ahora &rarr;</a>
        </article>
      </div>
    </div>
  </section>

  <!-- Banner Interactivo de Cotización Rápida a WhatsApp -->
  <section class="section section-alt" aria-labelledby="form-heading">
    <div class="container" style="max-width: 960px;">
      <div class="contact-card">
        <div style="text-align:center; margin-bottom: 2rem;">
          <span class="section-badge">Atención Directa y Personalizada</span>
          <h2 id="form-heading">Cotice con el Instalador SEC Domingo Isaín</h2>
          <p>Complete los datos y conecte directamente por WhatsApp con el diagnóstico inicial de su instalación:</p>
        </div>

        <form id="quickQuoteForm">
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
            <div class="form-group">
              <label for="formService" class="form-label">Servicio Requerido *</label>
              <select id="formService" class="form-control" required>
                <option value="Detección de Fuga de Gas sin Romper">Detección de Fuga de Gas sin Romper</option>
                <option value="Sellado de Cañería con Prodoral R6-1">Sellado de Cañería con Prodoral R6-1</option>
                <option value="Certificación y Sello Verde SEC">Certificación y Sello Verde SEC</option>
                <option value="Regularización por Sello Rojo / Corte de Gas">Regularización por Sello Rojo / Corte de Gas</option>
                <option value="Instalación o Modificación de Red de Cobre">Instalación o Modificación de Red de Cobre</option>
                <option value="Reparación o Instalación de Calefont">Reparación o Instalación de Calefont</option>
                <option value="Conversión de Gas (GLP a Natural)">Conversión de Gas (GLP a Natural)</option>
                <option value="Urgencia 24 Horas">Urgencia 24 Horas</option>
              </select>
            </div>

            <div class="form-group">
              <label for="formCommune" class="form-label">Comuna o Sector *</label>
              <input type="text" id="formCommune" class="form-control" placeholder="Ej: Las Condes, Vitacura, Ñuñoa..." required>
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 1.25rem;">
            <div class="form-group">
              <label for="formUrgency" class="form-label">Nivel de Urgencia</label>
              <select id="formUrgency" class="form-control">
                <option value="Urgente - Hoy Mismo">Urgente - Hoy Mismo</option>
                <option value="Próximos días">Próximos días</option>
                <option value="Solo Cotización">Solo Cotización</option>
              </select>
            </div>

            <div class="form-group">
              <label for="formComment" class="form-label">Síntomas o Detalles (Opcional)</label>
              <input type="text" id="formComment" class="form-control" placeholder="Ej: Olor a gas en la cocina, corte Metrogas, calefont no enciende...">
            </div>
          </div>

          <div style="text-align: center; margin-top: 1rem;">
            <button type="submit" class="btn btn-whatsapp btn-lg" style="width: 100%; max-width: 480px;">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
              <span>Enviar a WhatsApp (+56 9 4987 7316)</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Nuestra Experiencia y Respaldo (+40.000 Casos y 100% Métricas) -->
  <section class="section" id="nosotros" aria-labelledby="experience-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Trayectoria Comprobada en Chile</span>
        <h2 id="experience-heading">40 Años de Experiencia como Gasfiter Certificado SEC</h2>
        <p>
          <strong>InstalGas Chile</strong> es dirigido por el Instalador Certificado Autorizado SEC <strong><?= DIRECTOR_NAME ?></strong>, con más de 40 años de experiencia en instalaciones de gas, agua, calefacción y soluciones sanitarias. A lo largo de su trayectoria ha resuelto más de 40.000 casos, priorizando siempre la seguridad, la normativa y la tranquilidad de cada cliente.
        </p>
      </div>

      <div class="metrics-grid">
        <div class="metric-card">
          <div class="metric-number highlight">+40.000</div>
          <div class="metric-title">Clientes Satisfechos en 40 Años de Labor</div>
        </div>
        <div class="metric-card">
          <div class="metric-number">100%</div>
          <div class="metric-title">Experiencia Profesional en Gas y Agua</div>
        </div>
        <div class="metric-card">
          <div class="metric-number">100%</div>
          <div class="metric-title">Certificación SEC Vigente (Clase 1)</div>
        </div>
        <div class="metric-card">
          <div class="metric-number highlight">100%</div>
          <div class="metric-title">Diagnóstico Profesional y Pruebas de Hermeticidad</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Opiniones de Clientes Satisfechos (Social Proof) -->
  <section class="section section-alt" aria-labelledby="testimonials-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Confianza y Respaldo Real</span>
        <h2 id="testimonials-heading">Lo que Opinan Quienes Ya Confiaron en Nosotros</h2>
        <p>Casos reales de familias y comunidades atendidas en Santiago y la Región Metropolitana:</p>
      </div>

      <div class="testimonials-grid">
        <div class="testimonial-card">
          <p class="testimonial-text">
            “Detectaron una fuga que otros no encontraron. El gasfiter a domicilio fue muy profesional y cuidadoso. Me dio mucha tranquilidad saber que era certificado SEC.”
          </p>
          <div class="testimonial-author">
            <div class="testimonial-name">Jorge R.</div>
            <div class="testimonial-location">La Florida • Cliente Detección de Fugas</div>
          </div>
        </div>

        <div class="testimonial-card">
          <p class="testimonial-text">
            “Necesitaba la certificación SEC de gas para regularizar mi casa. El diagnóstico fue rápido y el proceso muy ordenado. Recomiendo totalmente a este gasfiter autorizado.”
          </p>
          <div class="testimonial-author">
            <div class="testimonial-name">María P.</div>
            <div class="testimonial-location">Ñuñoa • Cliente Certificación SEC</div>
          </div>
        </div>

        <div class="testimonial-card">
          <p class="testimonial-text">
            “Llamé a InstalGasChile por un problema urgente y llegó un gasfiter certificado SEC que explicó todo con claridad. La instalación de gas quedó segura y funcionando perfecto. Se nota la experiencia.”
          </p>
          <div class="testimonial-author">
            <div class="testimonial-name">Carlos M.</div>
            <div class="testimonial-location">Santiago Centro • Cliente Instalación de Gas</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección Blog / Guías Técnicas -->
  <section class="section" id="blog" aria-labelledby="blog-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Educación y Prevención</span>
        <h2 id="blog-heading">Consejos y Guías de Gasfiter Certificado SEC</h2>
        <p>Artículos técnicos redactados para ayudar a los propietarios a cuidar su hogar y cumplir las normativas:</p>
      </div>

      <div class="blog-grid">
        <article class="blog-card">
          <a href="<?= SITE_URL ?>/diferencia-gasfiter-certificado-y-no-certificado" style="display:block; overflow:hidden;">
            <img src="<?= SITE_URL ?>/blog/gasfiter-certificado-vs-no-certificado.png" alt="Gasfiter certificado vs gasfiter no certificado" width="400" height="225" style="width:100%; height:200px; object-fit:cover; display:block;" loading="lazy">
          </a>
          <div class="blog-body">
            <div class="blog-date">7 de Enero de 2026</div>
            <h3 class="blog-heading">
              <a href="<?= SITE_URL ?>/diferencia-gasfiter-certificado-y-no-certificado">Gasfiter certificado vs gasfiter no certificado</a>
            </h3>
            <p class="blog-text">
              Descubra por qué contratar a un gásfiter aficionado puede provocar cortes de suministro por Metrogas o la anulación de su seguro de hogar.
            </p>
            <a href="<?= SITE_URL ?>/diferencia-gasfiter-certificado-y-no-certificado" class="btn btn-outline btn-sm">Leer Guía Completa &rarr;</a>
          </div>
        </article>

        <article class="blog-card">
          <a href="<?= SITE_URL ?>/como-verificar-gasfiter-certificado-sec" style="display:block; overflow:hidden;">
            <img src="<?= SITE_URL ?>/blog/verificar-gasfiter-certificado-sec.png" alt="Cómo verificar si un gasfiter es certificado SEC" width="400" height="225" style="width:100%; height:200px; object-fit:cover; display:block;" loading="lazy">
          </a>
          <div class="blog-body">
            <div class="blog-date">7 de Enero de 2026</div>
            <h3 class="blog-heading">
              <a href="<?= SITE_URL ?>/como-verificar-gasfiter-certificado-sec">Cómo verificar si un gasfiter es certificado SEC</a>
            </h3>
            <p class="blog-text">
              Paso a paso para consultar el registro público de la Superintendencia de Electricidad y Combustibles y validar el código QR oficial.
            </p>
            <a href="<?= SITE_URL ?>/como-verificar-gasfiter-certificado-sec" class="btn btn-outline btn-sm">Leer Guía Completa &rarr;</a>
          </div>
        </article>

        <article class="blog-card">
          <a href="<?= SITE_URL ?>/que-hace-un-gasfiter-certificado-sec" style="display:block; overflow:hidden;">
            <img src="<?= SITE_URL ?>/blog/funciones-gasfiter-certificado-sec.png" alt="¿Qué hace un gasfiter certificado SEC?" width="400" height="225" style="width:100%; height:200px; object-fit:cover; display:block;" loading="lazy">
          </a>
          <div class="blog-body">
            <div class="blog-date">7 de Enero de 2026</div>
            <h3 class="blog-heading">
              <a href="<?= SITE_URL ?>/que-hace-un-gasfiter-certificado-sec">¿Qué hace un gasfiter certificado SEC?</a>
            </h3>
            <p class="blog-text">
              Conozca el campo de acción de un instalador Clase 1: proyectos de cobre DS 66, pruebas de hermeticidad y tramitaciones de Sello Verde.
            </p>
            <a href="<?= SITE_URL ?>/que-hace-un-gasfiter-certificado-sec" class="btn btn-outline btn-sm">Leer Guía Completa &rarr;</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Inclusión de Preguntas Frecuentes (FAQ) -->
  <?php 
  $faq_list = $page_faqs;
  require __DIR__ . '/includes/faq-section.php'; 
  ?>

  <!-- Cobertura Geográfica -->
  <section class="section section-alt" aria-labelledby="coverage-heading">
    <div class="container text-center" style="text-align: center;">
      <span class="section-badge">Zona de Cobertura Inmediata</span>
      <h2 id="coverage-heading">Atención a Domicilio en Santiago y V Región</h2>
      <p style="max-width: 720px; margin: 0 auto 1.5rem;">
        Desplazamiento rápido con móviles equipados con herramientas de detección electrónica y repuestos certificados SEC.
      </p>
      <div class="coverage-pills">
        <?php foreach ($coverage_areas as $commune): ?>
          <span class="coverage-pill"><?= htmlspecialchars($commune) ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Banner de Urgencia Final -->
  <div class="container">
    <section class="emergency-banner" aria-label="Llamado final a la acción para emergencias de gas">
      <h2>¿Siente Olor a Gas o Sufrió un Corte de Suministro?</h2>
      <p>No manipule interruptores ni artefactos eléctricos. Ventile el área, cierre la llave de paso y llámenos ahora mismo.</p>
      <div style="display:flex; justify-content:center; gap:1rem; flex-wrap:wrap;">
        <a href="<?= get_whatsapp_url('EMERGENCIA INMEDIATA: Solicito asistencia urgente en mi dirección.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          Escribir por WhatsApp (+56 9 4987 7316)
        </a>
        <a href="tel:+<?= PHONE_RAW ?>" class="btn btn-secondary btn-lg">
          Llamar Directo al <?= PHONE_DISPLAY ?>
        </a>
      </div>
    </section>
  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
