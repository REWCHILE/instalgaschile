<?php
/**
 * Landing Especializada: Detección y Sellado de Fugas de Gas Sin Romper
 * Instalgas Chile - https://instalgaschile.cl/deteccion-fugas-gas
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$fugas_faqs = [
    [
        'question' => '¿Por qué la prueba de la esponja con jabón ya no es suficiente para detectar fugas de gas?',
        'answer' => 'La técnica del agua con jabón solo detecta fugas externas visibles y de tamaño considerable en uniones expuestas. La gran mayoría de las fugas que provocan rechazos de inspección o cortes de Metrogas ocurren dentro de muros, losas bajo radier o cielo falso, donde la tubería no está a la vista. Con nuestro equipo de gas trazador y sensores digitales detectamos fugas de hasta 0.1 mbar sin picar ni una sola baldosa.'
    ],
    [
        'question' => '¿Es seguro el gas trazador que introducen en la cañería?',
        'answer' => 'Completamente seguro. El gas trazador (mezcla Formiergas 95/5) está compuesto por un 95% de nitrógeno y solo un 5% de hidrógeno. Es un gas inerte, no inflamable, no tóxico y amigable con el medio ambiente. Su molécula es la más diminuta del universo, lo que le permite escapar por la microfisura más microscópica para ser captado de inmediato por nuestras sondas electrónicas.'
    ],
    [
        'question' => '¿Cómo funciona exactamente el sellado con Prodoral R6-1?',
        'answer' => 'Prodoral R6-1 es un polímero de fabricación alemana con certificación DIN-DVGW para instalaciones de gas. Se inyecta en estado líquido en la cañería aislada tras una limpieza con nitrógeno; luego se bombea a presión controlada impregnando todas las roscas y uniones debilitadas. Finalmente se retira el excedente y se seca con aire forzado, creando una camisa elástica interna indestructible. Evita semanas de obras civiles, polvillo y altos costos de albañilería.'
    ],
    [
        'question' => '¿Cuánto tiempo demora el servicio de detección y sellado?',
        'answer' => 'La detección electrónica toma habitualmente entre 60 y 120 minutos. Si se realiza el sellado con Prodoral R6-1, el trabajo completo de limpieza, inyección, secado y prueba manométrica final de hermeticidad suele completarse en una sola jornada (4 a 6 horas), dejando el gas habilitado el mismo día.'
    ]
];

$seo_config = [
    'title' => 'Detección de Fugas de Gas Sin Romper en Santiago | Gas Trazador y Prodoral R6-1',
    'description' => 'Localización electrónica de fugas de gas con gas trazador y geófono. Sellado de cañerías con polímero Prodoral R6-1 sin demoler pisos. Atención 24/7.',
    'keywords' => 'deteccion de fugas de gas, gas trazador santiago, geofono gas chile, prodoral r6-1 chile, reparar fuga gas sin romper, gasfiter fugas de gas santiago',
    'canonical' => SITE_URL . '/deteccion-fugas-gas',
    'image' => SITE_URL . '/assets/img/hero-tecnico-gas-sec.jpg',
    'type' => 'article',
    'faqs' => $fugas_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Detección de Fugas de Gas', 'url' => SITE_URL . '/deteccion-fugas-gas']
    ],
    'service' => [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => "Detección No Invasiva de Fugas de Gas y Sellado con Prodoral R6-1",
        "provider" => [
            "@type" => "Plumber",
            "name" => SITE_NAME,
            "telephone" => "+" . PHONE_RAW
        ],
        "areaServed" => "Santiago y V Región, Chile",
        "description" => "Detección electroacústica con gas trazador y reparación interna de cañerías sin demolición."
    ]
];

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <!-- Migas de pan -->
  <div class="container breadcrumbs" aria-label="Migas de pan">
    <a href="<?= SITE_URL ?>/">Inicio</a>
    <span>&rsaquo;</span>
    <strong>Detección de Fugas de Gas y Sellado</strong>
  </div>

  <!-- Hero Detección -->
  <section class="hero" style="background: radial-gradient(circle at 75% 25%, #991b1b 0%, #0d254c 100%);" aria-labelledby="fugas-hero-title">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="hero-tagline" style="background: rgba(198, 40, 40, 0.3); border-color: rgba(254, 202, 202, 0.4);">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fca5a5" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
            <span>Emergencias y Detección No Invasiva 24/7</span>
          </div>
          <h1 id="fugas-hero-title" class="hero-title">
            Detección de Fugas de Gas con <span style="color:#fca5a5;">Gas Trazador y Sellado Sin Romper</span>
          </h1>
          <p class="hero-subtitle">
            Localizamos la pérdida con precisión milimétrica mediante <strong>sensores de hidrógeno y geófono acústico</strong>. Reparamos cañerías interiores con el polímero alemán <strong>Prodoral R6-1</strong>, conservando intactos sus porcelanatos, muros y pisos.
          </p>
          <div class="hero-ctas">
            <a href="<?= get_whatsapp_url('URGENCIA FUGAS: Sospecho de una fuga de gas en mi propiedad y necesito localización no destructiva.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
              <span>Solicitar Detección por WhatsApp</span>
            </a>
            <a href="tel:+<?= PHONE_RAW ?>" class="btn btn-outline" style="color:#ffffff; border-color:#ffffff;">
              Llamar al <?= PHONE_DISPLAY ?>
            </a>
          </div>
        </div>

        <div>
          <img src="<?= SITE_URL ?>/assets/img/hero-tecnico-gas-sec.webp" alt="Técnico Instalador SEC inspeccionando red de gas con detector digital en Santiago" width="600" height="338" style="border-radius:var(--radius-lg); box-shadow:var(--shadow-xl); border:2px solid var(--accent-red);" loading="eager">
        </div>
      </div>
    </div>
  </section>

  <!-- Protocolo de Seguridad: Qué hacer si huele a gas -->
  <section class="section" aria-labelledby="protocol-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge" style="color:var(--accent-red);">Protocolo de Emergencia Inmediata</span>
        <h2 id="protocol-heading">¿Percibe olor a gas? Siga estas instrucciones ahora mismo:</h2>
        <p>Actuar con calma y rapidez puede prevenir una explosión o intoxicación:</p>
      </div>

      <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
        <div style="background:#fef2f2; border: 1px solid #fecaca; padding:1.5rem; border-radius:var(--radius-md);">
          <div style="font-size:1.5rem; font-weight:800; color:var(--accent-red); margin-bottom:0.5rem;">1. No Encienda Nada</div>
          <p style="font-size:0.9rem; color:#7f1d1d;">No toque interruptores de luz, timbres, encendedores ni aparatos eléctricos. Una chispa mínima puede detonar el gas acumulado.</p>
        </div>
        <div style="background:#fef2f2; border: 1px solid #fecaca; padding:1.5rem; border-radius:var(--radius-md);">
          <div style="font-size:1.5rem; font-weight:800; color:var(--accent-red); margin-bottom:0.5rem;">2. Cierre la Llave de Paso</div>
          <p style="font-size:0.9rem; color:#7f1d1d;">Cierre la válvula de corte general del medidor o del cilindro/estanque para cortar el flujo de gas inmediatamente.</p>
        </div>
        <div style="background:#fef2f2; border: 1px solid #fecaca; padding:1.5rem; border-radius:var(--radius-md);">
          <div style="font-size:1.5rem; font-weight:800; color:var(--accent-red); margin-bottom:0.5rem;">3. Ventile el Recinto</div>
          <p style="font-size:0.9rem; color:#7f1d1d;">Abra puertas y ventanas de par en par para permitir la circulación de aire fresco y la disipación del combustible.</p>
        </div>
        <div style="background:#fef2f2; border: 1px solid #fecaca; padding:1.5rem; border-radius:var(--radius-md);">
          <div style="font-size:1.5rem; font-weight:800; color:var(--accent-red); margin-bottom:0.5rem;">4. Contáctenos desde Fuera</div>
          <p style="font-size:0.9rem; color:#7f1d1d;">Salga al exterior de la vivienda y comuníquese inmediatamente con nuestro equipo de emergencia SEC al +56 9 4987 7316.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tecnologías de Vanguardia: Gas Trazador + Prodoral R6-1 -->
  <section class="section section-alt" aria-labelledby="tech-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Tecnología Sin Demolición</span>
        <h2 id="tech-heading">Equipamiento Europeo de Máxima Precisión</h2>
        <p>Invertimos en instrumental avanzado para resolver su problema sin destruir su patrimonio:</p>
      </div>

      <div style="display:grid; grid-template-columns: 1fr 1fr; gap:2.5rem; align-items:center;">
        <div>
          <h3 style="color:var(--primary-blue); font-size:1.5rem; margin-bottom:1rem;">
            1. Gas Trazador Formiergas y Sensores Digitales
          </h3>
          <p style="color:var(--text-muted); line-height:1.7; margin-bottom:1.25rem;">
            A diferencia de los métodos tradicionales a ciegas, inyectamos una mezcla certificada de <strong>95% Nitrógeno y 5% Hidrógeno</strong>. Debido a que el hidrógeno tiene la menor masa molecular existente, escapa velozmente a través de porosidades microscópicas.
          </p>
          <ul style="display:flex; flex-direction:column; gap:0.5rem; font-size:0.95rem; margin-bottom:1.5rem;">
            <li style="display:flex; align-items:center; gap:0.5rem;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Detección bajo radier, losas de hormigón y muros revestidos.</span>
            </li>
            <li style="display:flex; align-items:center; gap:0.5rem;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>Geófono electroacústico para amplificar el sonido de despresurización.</span>
            </li>
            <li style="display:flex; align-items:center; gap:0.5rem;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>100% no inflamable, inerte y seguro para los habitantes.</span>
            </li>
          </ul>

          <h3 style="color:var(--primary-blue); font-size:1.5rem; margin-bottom:1rem; margin-top:2rem;">
            2. Sellado Químico con Polímero Prodoral R6-1
          </h3>
          <p style="color:var(--text-muted); line-height:1.7; margin-bottom:1.25rem;">
            Solución alemana que restaura la hermeticidad de la tubería desde el interior. Sella uniones roscadas y fisuras sin necesidad de reemplazar la cañería entera ni romper terminaciones costosas.
          </p>
          <a href="<?= get_whatsapp_url('Hola Domingo Isaín, me interesa evaluar el sellado con Prodoral R6-1 para mi red de gas.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
            Cotizar Detección y Sellado Prodoral
          </a>
        </div>

        <div>
          <img src="<?= SITE_URL ?>/assets/img/gasfiter-trabajo-instalaciones.png" alt="Instalaciones de cañerías y llaves de paso de gas por técnico profesional en Vitacura y Santiago" width="550" height="600" style="border-radius:var(--radius-lg); box-shadow:var(--shadow-lg); object-fit:cover;" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Inclusión de FAQ -->
  <?php 
  $faq_list = $fugas_faqs;
  require __DIR__ . '/includes/faq-section.php'; 
  ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
