<?php
/**
 * Landing Especializada: Certificación y Sello Verde SEC
 * Instalgas Chile - https://instalgaschile.cl/certificacion-sec
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$sec_faqs = [
    [
        'question' => '¿Qué significa tener Sello Rojo en mi comunidad o vivienda y qué consecuencias legales tiene?',
        'answer' => 'El Sello Rojo indica que la instalación presenta "Defectos Críticos" según el Decreto Supremo N° 66 de la SEC. Implica riesgo inminente de fuga, explosión o intoxicación por monóxido de carbono. Si no se subsana, la empresa distribuidora (Metrogas, Lipigas, Gasco o Abastible) está facultada por ley para suspender o cortar el suministro de gas, y las compañías de seguros no responderán ante siniestros.'
    ],
    [
        'question' => '¿Cuál es la diferencia entre Sello Verde, Sello Amarillo y Sello Rojo?',
        'answer' => 'El <strong>Sello Verde</strong> certifica que la instalación cumple al 100% las normativas de seguridad y tiene una vigencia de 2 años. El <strong>Sello Amarillo</strong> identifica defectos menores (no críticos) otorgando un plazo legal perentorio de 60 a 90 días para reparar. El <strong>Sello Rojo</strong> señala peligro grave e impide la continuidad normal del servicio hasta su reparación y reinspección.'
    ],
    [
        'question' => '¿Qué es el proyecto o declaración TC6 de la SEC?',
        'answer' => 'El TC6 es la Declaración de Instalación Interior de Gas ante la SEC. Es el documento formal firmado exclusivamente por un Instalador Autorizado SEC (como Domingo Isaín Plaza Caamaño) que certifica que el diseño, materiales y trazado de las tuberías y artefactos cumplen estrictamente con la normativa chilena.'
    ],
    [
        'question' => '¿Cómo ayuda Instalgas Chile a subsanar un rechazo de inspección?',
        'answer' => 'Revisamos el informe de la entidad de certificación inspectora, realizamos prueba de hermeticidad con manómetro, corregimos ventilaciones, conductos de evacuación (sustitución de corrugados por ductos lisos certificados), reparamos fugas con gas trazador o Prodoral R6-1, emitimos el informe técnico de subsanación y coordinamos la reinspección para obtener el Sello Verde.'
    ]
];

$seo_config = [
    'title' => 'Certificación SEC y Sello Verde de Gas en Santiago | Instalgas Chile',
    'description' => 'Regularización de Sello Rojo y Amarillo ante la SEC. Obtenga su Sello Verde con el instalador autorizado Domingo Isaín. Proyectos TC6 y hermeticidad.',
    'keywords' => 'sello verde sec santiago, regularizar sello rojo gas, certificacion sec gas chile, inspeccion periodica gas ds 66, instalador sec clase 1 santiago, tc6 gas chile',
    'canonical' => SITE_URL . '/certificacion-sec',
    'image' => SITE_URL . '/assets/img/certificacion-sello-verde-sec.jpg',
    'type' => 'article',
    'faqs' => $sec_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Certificación SEC', 'url' => SITE_URL . '/certificacion-sec']
    ],
    'service' => [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => "Certificación SEC y Obtención de Sello Verde de Gas",
        "provider" => [
            "@type" => "Plumber",
            "name" => SITE_NAME,
            "telephone" => "+" . PHONE_RAW
        ],
        "areaServed" => "Santiago, Chile",
        "description" => "Servicio de regularización, reparación de no conformidades y tramitación de Sello Verde oficial de la SEC."
    ]
];

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <!-- Migas de pan -->
  <div class="container breadcrumbs" aria-label="Migas de pan">
    <a href="<?= SITE_URL ?>/">Inicio</a>
    <span>&rsaquo;</span>
    <strong>Certificación SEC y Sello Verde</strong>
  </div>

  <!-- Hero de la Página -->
  <section class="section" style="padding-top: 1.5rem;" aria-labelledby="sec-landing-title">
    <div class="container">
      <div class="hero-grid" style="align-items: center;">
        <div>
          <span class="section-badge">Normativa DS 66 • Ministerio de Economía</span>
          <h1 id="sec-landing-title" style="color: var(--primary-blue); margin-bottom: 1.25rem;">
            Regularización y Obtención de <span style="color: var(--sec-green-dark);">Sello Verde SEC</span> en Santiago
          </h1>
          <p style="font-size: 1.15rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 1.75rem;">
            ¿Su edificio, casa o local comercial recibió <strong>Sello Rojo</strong> o <strong>Sello Amarillo</strong>? Evite el corte de suministro de Metrogas o Lipigas. Regularizamos cada observación técnica con respaldo oficial del instalador certificado <strong>Domingo Isaín Plaza Caamaño</strong> (RUT: 12.738.961-6).
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <a href="<?= get_whatsapp_url('Hola Domingo Isaín, necesito regularizar mi instalación para obtener Sello Verde SEC.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
              Cotizar Regularización SEC (+56 9 4987 7316)
            </a>
            <a href="tel:+<?= PHONE_RAW ?>" class="btn btn-outline btn-lg">
              Llamar al Especialista SEC
            </a>
          </div>
        </div>

        <div>
          <img src="<?= SITE_URL ?>/assets/img/certificacion-sello-verde-sec.webp" alt="Certificado de Inspección Periódica Sello Verde SEC por Instalador Certificado en Santiago" width="600" height="338" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); border: 2px solid var(--sec-green);" loading="eager">
        </div>
      </div>
    </div>
  </section>

  <!-- Los 3 Sellos de la SEC -->
  <section class="section section-alt" aria-labelledby="sellos-explanation-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Clasificación Oficial</span>
        <h2 id="sellos-explanation-heading">¿Qué significa cada Sello de la SEC?</h2>
        <p>Conozca el estado legal de su red de gas y las acciones que debe tomar de inmediato:</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.75rem;">
        <!-- Sello Verde -->
        <article class="service-card" style="border-top: 5px solid var(--sec-green);">
          <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
            <span style="background:#ecfdf5; color:var(--sec-green-dark); font-weight:800; padding:0.4rem 0.9rem; border-radius:var(--radius-sm); font-size:0.9rem;">SELLO VERDE</span>
            <span style="font-size:0.85rem; color:#64748b; font-weight:600;">Vigencia: 2 años</span>
          </div>
          <h3 style="font-size:1.3rem;">Instalación Aprobada</h3>
          <p class="service-desc">
            Indica que la red de cañerías, uniones, ventilaciones y artefactos cumplen estrictamente las normativas de seguridad del DS 66. Garantiza tranquilidad y total cobertura ante seguros.
          </p>
          <div style="color:var(--sec-green-dark); font-weight:700; font-size:0.9rem;">
            &check; Aprobado para suministro continuo sin restricciones.
          </div>
        </article>

        <!-- Sello Amarillo -->
        <article class="service-card" style="border-top: 5px solid var(--alert-amber);">
          <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
            <span style="background:#fffbeb; color:#b45309; font-weight:800; padding:0.4rem 0.9rem; border-radius:var(--radius-sm); font-size:0.9rem;">SELLO AMARILLO</span>
            <span style="font-size:0.85rem; color:#b45309; font-weight:600;">Plazo: 60 - 90 días</span>
          </div>
          <h3 style="font-size:1.3rem;">Con Observaciones Menores</h3>
          <p class="service-desc">
            Presenta anomalías que no constituyen peligro inminente, pero que deben repararse en el plazo estipulado. Si no se subsana, pasa automáticamente a Sello Rojo.
          </p>
          <div style="color:#b45309; font-weight:700; font-size:0.9rem;">
            &excl; Requiere corrección técnica antes del vencimiento.
          </div>
        </article>

        <!-- Sello Rojo -->
        <article class="service-card" style="border-top: 5px solid var(--accent-red);">
          <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
            <span style="background:#fef2f2; color:var(--accent-red); font-weight:800; padding:0.4rem 0.9rem; border-radius:var(--radius-sm); font-size:0.9rem;">SELLO ROJO</span>
            <span style="font-size:0.85rem; color:var(--accent-red); font-weight:600;">Riesgo Inminente</span>
          </div>
          <h3 style="font-size:1.3rem;">Rechazado por Defectos Críticos</h3>
          <p class="service-desc">
            Existe fuga activa, falta grave de ventilación o artefactos en recintos prohibidos. La empresa distribuidora tiene la obligación legal de cortar el gas para evitar accidentes fatales.
          </p>
          <div style="color:var(--accent-red); font-weight:700; font-size:0.9rem;">
            &cross; Requiere intervención urgente con instalador SEC.
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Proceso de Regularización de Instalgas Chile -->
  <section class="section" aria-labelledby="steps-heading">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Metodología Rápida y Transparente</span>
        <h2 id="steps-heading">¿Cómo regularizamos su instalación para obtener Sello Verde?</h2>
        <p>Nuestro proceso paso a paso para devolver la seguridad y la legalidad a su inmueble:</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
        <div style="background:#ffffff; padding:1.75rem; border-radius:var(--radius-md); border:1px solid var(--border-color); box-shadow:var(--shadow-sm);">
          <div style="width:40px; height:40px; border-radius:50%; background:var(--primary-blue); color:#ffffff; display:flex; align-items:center; justify-content:center; font-weight:800; margin-bottom:1rem;">1</div>
          <h4 style="font-size:1.15rem; margin-bottom:0.5rem;">Diagnóstico en Terreno</h4>
          <p style="font-size:0.9rem; color:var(--text-muted);">Revisión visual y prueba manométrica de hermeticidad para cotejar las observaciones del informe de inspección.</p>
        </div>

        <div style="background:#ffffff; padding:1.75rem; border-radius:var(--radius-md); border:1px solid var(--border-color); box-shadow:var(--shadow-sm);">
          <div style="width:40px; height:40px; border-radius:50%; background:var(--primary-blue); color:#ffffff; display:flex; align-items:center; justify-content:center; font-weight:800; margin-bottom:1rem;">2</div>
          <h4 style="font-size:1.15rem; margin-bottom:0.5rem;">Subsanación de Anomalías</h4>
          <p style="font-size:0.9rem; color:var(--text-muted);">Reparación de fugas (con gas trazador o Prodoral R6-1 sin demoler), corrección de ventilaciones y reemplazo de ductos no normados.</p>
        </div>

        <div style="background:#ffffff; padding:1.75rem; border-radius:var(--radius-md); border:1px solid var(--border-color); box-shadow:var(--shadow-sm);">
          <div style="width:40px; height:40px; border-radius:50%; background:var(--primary-blue); color:#ffffff; display:flex; align-items:center; justify-content:center; font-weight:800; margin-bottom:1rem;">3</div>
          <h4 style="font-size:1.15rem; margin-bottom:0.5rem;">Informe Técnico y TC6</h4>
          <p style="font-size:0.9rem; color:var(--text-muted);">El instalador Domingo Isaín (SEC 12.738.961-6) suscribe el informe de conformidad técnica y documentación para la entidad acreditada.</p>
        </div>

        <div style="background:#ffffff; padding:1.75rem; border-radius:var(--radius-md); border:1px solid var(--border-color); box-shadow:var(--shadow-sm);">
          <div style="width:40px; height:40px; border-radius:50%; background:var(--sec-green-dark); color:#ffffff; display:flex; align-items:center; justify-content:center; font-weight:800; margin-bottom:1rem;">4</div>
          <h4 style="font-size:1.15rem; margin-bottom:0.5rem;">Reinspección y Sello Verde</h4>
          <p style="font-size:0.9rem; color:var(--text-muted);">Se coordina la reinspección con el organismo certificador y se entrega el Sello Verde oficial adherido y registrado ante la SEC.</p>
        </div>
      </div>

      <div style="text-align:center; margin-top:3rem;">
        <a href="<?= get_whatsapp_url('Hola Domingo Isaín, tengo el informe de inspección y necesito presupuesto para pasar a Sello Verde.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          Enviar Informe de Rechazo a WhatsApp (+56 9 4987 7316)
        </a>
      </div>
    </div>
  </section>

  <!-- FAQs específicas de Certificación SEC -->
  <?php 
  $faq_list = $sec_faqs;
  require __DIR__ . '/includes/faq-section.php'; 
  ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
