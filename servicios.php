<?php
/**
 * Catálogo Completo de Servicios - Instalgas Chile
 * https://instalgaschile.cl/servicios
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$servicios_faqs = [
    [
        'question' => '¿Qué tipos de cañería están permitidas por la SEC en redes de gas interiores?',
        'answer' => 'La normativa chilena (DS 66) exige el uso de tuberías de cobre tipo L o K unidas mediante soldadura fuerte (aleación de plata al 45% mínimo) para instalaciones empotradas. Para instalaciones exteriores o matrices se permiten cañerías de acero al carbono o polietileno de alta densidad (PEALPE) debidamente certificadas.'
    ],
    [
        'question' => '¿Cuánto dura la mantención preventiva de un calefont y qué incluye?',
        'answer' => 'La mantención toma aproximadamente 45 a 60 minutos. Incluye limpieza profunda del quemador y cámara de combustión, desincrustación de serpentín, revisión del sensor de monóxido de carbono (CO), verificación del conducto de evacuación de gases y prueba de encendido y llama limpia (azul).'
    ],
    [
        'question' => '¿Emiten boleta o factura para condominios y empresas?',
        'answer' => 'Sí, emitimos boletas y facturas electrónicas válidas para personas naturales, comités de administración de edificios, condominios, colegios, restaurantes e industrias.'
    ]
];

$seo_config = [
    'title' => 'Servicios de Gasfitería e Instalaciones de Gas SEC | Instalgas Chile',
    'description' => 'Catálogo de servicios autorizados SEC en Santiago: Detección de fugas, sellado Prodoral R6-1, Sello Verde, redes de cobre y calderas. Domingo Isaín.',
    'keywords' => 'servicios de gasfiteria santiago, instalador de gas sec santiago, reparacion calefont santiago, redes de gas cobre ds 66, sellado prodoral r6-1',
    'canonical' => SITE_URL . '/servicios',
    'image' => SITE_URL . '/assets/img/og-instalgas-share.jpg',
    'type' => 'website',
    'faqs' => $servicios_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Servicios', 'url' => SITE_URL . '/servicios']
    ]
];

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <!-- Migas de pan -->
  <div class="container breadcrumbs" aria-label="Migas de pan">
    <a href="<?= SITE_URL ?>/">Inicio</a>
    <span>&rsaquo;</span>
    <strong>Servicios Profesionales de Gas</strong>
  </div>

  <!-- Cabecera de Servicios -->
  <section class="section" style="padding-top: 1.5rem; text-align: center;">
    <div class="container" style="max-width: 800px;">
      <span class="section-badge">Soluciones de Ingeniería y Gasfitería SEC</span>
      <h1>Nuestros Servicios Especializados en Gas</h1>
      <p style="font-size: 1.15rem; color: var(--text-muted); margin-top: 1rem;">
        Con el respaldo del instalador certificado <strong><?= DIRECTOR_NAME ?></strong> (RUT: <?= DIRECTOR_RUT ?>) y más de 40 años de trayectoria garantizando seguridad y estricto apego al Decreto Supremo N° 66.
      </p>
    </div>
  </section>

  <!-- Lista Detallada de Servicios -->
  <section class="section section-alt">
    <div class="container">
      <div style="display: flex; flex-direction: column; gap: 3rem;">

        <!-- Servicio 1: Detección -->
        <article id="deteccion" class="contact-card" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 2rem; align-items: center;">
          <div>
            <span class="section-badge" style="color:var(--sec-green-dark);">No Destructivo</span>
            <h2 style="font-size: 1.75rem; margin-bottom: 0.75rem;">1. Detección Electrónica de Fugas de Gas</h2>
            <p style="color: var(--text-muted); line-height: 1.6;">
              Localizamos fugas imperceptibles o subterráneas sin necesidad de demoler cerámicas ni muros. Aplicamos <strong>Gas Trazador (Nitrógeno/Hidrógeno)</strong> y geófonos acústicos de alta precisión con tecnología alemana.
            </p>
            <ul style="margin-bottom: 1.5rem; font-size: 0.95rem;">
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Prueba manométrica certificada de hermeticidad</span>
              </li>
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Detección bajo radier, piso flotante y hormigón</span>
              </li>
            </ul>
            <div style="display:flex; gap:1rem; flex-wrap:wrap;">
              <a href="<?= get_whatsapp_url('Hola Domingo Isaín, necesito cotizar detección de fugas de gas.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm">
                Cotizar Detección por WhatsApp
              </a>
              <a href="<?= SITE_URL ?>/deteccion-fugas-gas" class="btn btn-outline btn-sm">
                Ver Detalles Técnicos &rarr;
              </a>
            </div>
          </div>
          <div>
            <img src="<?= SITE_URL ?>/assets/img/hero-tecnico-gas-sec.jpg" alt="Detección de fugas de gas no invasiva en Santiago" width="450" height="280" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); object-fit: cover;" loading="lazy">
          </div>
        </article>

        <!-- Servicio 2: Prodoral R6-1 -->
        <article id="prodoral" class="contact-card" style="display: grid; grid-template-columns: 0.8fr 1.2fr; gap: 2rem; align-items: center;">
          <div>
            <img src="<?= SITE_URL ?>/assets/img/gasfiter-trabajo-instalaciones.png" alt="Sellado de cañerías con Prodoral R6-1 en Santiago" width="450" height="300" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); object-fit: cover;" loading="lazy">
          </div>
          <div>
            <span class="section-badge">Exclusividad Técnica</span>
            <h2 style="font-size: 1.75rem; margin-bottom: 0.75rem;">2. Sellado de Cañerías con Polímero Prodoral R6-1</h2>
            <p style="color: var(--text-muted); line-height: 1.6;">
              El método más económico y limpio para reparar cañerías con pérdidas de presión o microfugas en uniones roscadas. El polímero alemán sella desde adentro creando una capa elástica permanente aprobada bajo norma europea DIN-DVGW.
            </p>
            <ul style="margin-bottom: 1.5rem; font-size: 0.95rem;">
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Ahorra hasta un 70% comparado con la reposición completa</span>
              </li>
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Listo en una sola jornada sin escombros ni polvo</span>
              </li>
            </ul>
            <a href="<?= get_whatsapp_url('Hola Domingo Isaín, me interesa consultar por el sellado con Prodoral R6-1 para mi red de gas.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
              Consultar Sellado Prodoral
            </a>
          </div>
        </article>

        <!-- Servicio 3: Sello Verde SEC -->
        <article id="sello-verde" class="contact-card" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 2rem; align-items: center;">
          <div>
            <span class="section-badge" style="color:var(--sec-green-dark);">Certificación Oficial</span>
            <h2 style="font-size: 1.75rem; margin-bottom: 0.75rem;">3. Certificación SEC y Obtención de Sello Verde</h2>
            <p style="color: var(--text-muted); line-height: 1.6;">
              Regularizamos observaciones de inspecciones periódicas en edificios, condominios, colegios y residencias. Subsanamos causales de Sello Rojo o Amarillo y gestionamos el proyecto TC6 hasta la aprobación definitiva.
            </p>
            <ul style="margin-bottom: 1.5rem; font-size: 0.95rem;">
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Validez de 2 años ante la SEC y compañías de gas</span>
              </li>
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Informe de subsanación técnica firmado por instalador SEC</span>
              </li>
            </ul>
            <div style="display:flex; gap:1rem; flex-wrap:wrap;">
              <a href="<?= get_whatsapp_url('Hola Domingo Isaín, requiero regularizar mi instalación para Sello Verde SEC.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm">
                Regularizar Sello Verde por WhatsApp
              </a>
              <a href="<?= SITE_URL ?>/certificacion-sec" class="btn btn-outline btn-sm">
                Ver Normativa y Pasos &rarr;
              </a>
            </div>
          </div>
          <div>
            <img src="<?= SITE_URL ?>/assets/img/certificacion-sello-verde-sec.jpg" alt="Certificado Sello Verde SEC oficial en Santiago" width="450" height="280" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); object-fit: cover;" loading="lazy">
          </div>
        </article>

        <!-- Servicio 4: Redes de Cobre y Conversiones -->
        <article id="redes" class="contact-card" style="display: grid; grid-template-columns: 0.8fr 1.2fr; gap: 2rem; align-items: center;">
          <div>
            <img src="<?= SITE_URL ?>/assets/img/gasfiter-trabajo-instalaciones.png" alt="Instalación de redes de cobre soldadas para gas en Santiago" width="450" height="280" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); object-fit: cover;" loading="lazy">
          </div>
          <div>
            <span class="section-badge">Montaje y Construcción</span>
            <h2 style="font-size: 1.75rem; margin-bottom: 0.75rem;">4. Redes de Gas en Cobre y Conversiones de Red</h2>
            <p style="color: var(--text-muted); line-height: 1.6;">
              Diseño, tendido y modificación de cañerías en cobre tipo L con soldadura de plata según norma DS 66. Conversión integral de artefactos de <strong>Gas Licuado (GLP) a Gas Natural (GN)</strong> y viceversa con calibración de presión.
            </p>
            <ul style="margin-bottom: 1.5rem; font-size: 0.95rem;">
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Instalación de llaves de corte rápido y nichos de medidor</span>
              </li>
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Adaptación de cocinas, encimeras, hornos y calderas</span>
              </li>
            </ul>
            <a href="<?= get_whatsapp_url('Hola Domingo Isaín, solicito cotización para instalación de red de cobre o conversión de gas.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm">
              Cotizar Redes de Gas
            </a>
          </div>
        </article>

        <!-- Servicio 5: Calefont y Calderas -->
        <article id="calefont" class="contact-card" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 2rem; align-items: center;">
          <div>
            <span class="section-badge">Climatización y Agua Caliente</span>
            <h2 style="font-size: 1.75rem; margin-bottom: 0.75rem;">5. Mantención y Reparación de Calefont y Calderas</h2>
            <p style="color: var(--text-muted); line-height: 1.6;">
              Servicio técnico para calefont convencionales, ionizados y de tiro forzado (Junkers, Splendid, Mademsa, Trotter, Neckar). Montaje de conductos de evacuación de humos con tubos lisos certificados SEC y sellado de gases.
            </p>
            <ul style="margin-bottom: 1.5rem; font-size: 0.95rem;">
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Medición de emisión de monóxido de carbono (CO)</span>
              </li>
              <li style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.3rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Reemplazo de membranas, válvulas de gas y encendido electrónico</span>
              </li>
            </ul>
            <a href="<?= get_whatsapp_url('Hola Domingo Isaín, necesito mantención o reparación de mi calefont.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
              Agendar Revisión de Calefont
            </a>
          </div>
          <div>
            <img src="<?= SITE_URL ?>/assets/img/certificacion-sello-verde-sec.jpg" alt="Servicio técnico de calderas y calefont con certificación SEC" width="450" height="280" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); object-fit: cover;" loading="lazy">
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- Inclusión de FAQ -->
  <?php 
  $faq_list = $servicios_faqs;
  require __DIR__ . '/includes/faq-section.php'; 
  ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
