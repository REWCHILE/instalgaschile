<?php
/**
 * Guía Técnica: ¿Qué Hace un Gasfiter Certificado SEC?
 * Instalgas Chile - https://instalgaschile.cl/que-hace-un-gasfiter-certificado-sec
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$article_faqs = [
    [
        'question' => '¿Un gasfiter SEC puede realizar trabajos de agua potable y alcantarillado?',
        'answer' => 'Sí, los profesionales integrales como Domingo Isaín cuentan con amplia experiencia en gasfitería general, agua potable fría/caliente, redes de cobre, PPR, PVC sanitario, griferías y destapes, además de su especialización certificada en gas.'
    ],
    [
        'question' => '¿Qué documento oficial acredita que el trabajo quedó terminado conforme a la norma?',
        'answer' => 'Se emite el protocolo de prueba manométrica de hermeticidad y, cuando se trata de regularizaciones o proyectos nuevos, la Declaración TC6 suscrita con el registro SEC del instalador.'
    ]
];

$seo_config = [
    'title' => '¿Qué Hace un Gasfiter Certificado SEC? Funciones y Alcance | Instalgas Chile',
    'description' => 'Descubra las responsabilidades, competencias técnicas y proyectos que realiza un instalador autorizado por la SEC en Chile según el DS 66.',
    'keywords' => 'que hace un gasfiter certificado sec, funciones instalador sec gas, proyectos tc6 sec, reparacion redes gas sec',
    'canonical' => SITE_URL . '/que-hace-un-gasfiter-certificado-sec',
    'image' => SITE_URL . '/blog/funciones-gasfiter-certificado-sec.png',
    'type' => 'article',
    'faqs' => $article_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Blog', 'url' => SITE_URL . '/#blog'],
        ['name' => 'Qué Hace un Gasfiter SEC', 'url' => SITE_URL . '/que-hace-un-gasfiter-certificado-sec']
    ]
];

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <div class="container breadcrumbs" aria-label="Migas de pan">
    <a href="<?= SITE_URL ?>/">Inicio</a>
    <span>&rsaquo;</span>
    <a href="<?= SITE_URL ?>/#blog">Blog</a>
    <span>&rsaquo;</span>
    <strong>¿Qué Hace un Gásfiter Certificado SEC?</strong>
  </div>

  <article class="section" style="padding-top: 1.5rem;">
    <div class="container" style="max-width: 860px;">
      <span class="section-badge">Alcance y Competencias Técnicas</span>
      <h1 style="margin-bottom: 1.25rem;">¿Qué Hace un Gasfiter Certificado por la SEC y Cuándo Debe Contratarlo?</h1>
      
      <div style="display:flex; align-items:center; gap:1rem; margin-bottom:1.5rem; padding-bottom:1rem; border-bottom:1px solid var(--border-color); font-size:0.9rem; color:var(--text-muted);">
        <span>Por <strong><?= DIRECTOR_NAME ?></strong> (Instalador Autorizado SEC Clase 3 • DS 191)</span>
        <span>•</span>
        <time datetime="2026-01-07">7 de Enero de 2026</time>
      </div>

      <div style="margin-bottom: 2rem;">
        <img src="<?= SITE_URL ?>/blog/funciones-gasfiter-certificado-sec.png" alt="Funciones y alcance de un Gasfiter Certificado SEC en Chile" width="860" height="480" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); width:100%; height:auto;" loading="eager">
      </div>

      <div style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark);">
        <p>
          Muchas personas asocian la palabra "gasfiter" exclusivamente a destapar cañerías o cambiar sellos de llaves de agua. Sin embargo, en Chile un <strong>Instalador de Gas Certificado por la SEC</strong> es un especialista calificado en ingeniería de fluidos combustibles, ventilación, combustión y evacuación de gases tóxicos.
        </p>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          Marco Legal y Normativo: Decretos Supremos Clave
        </h2>
        <p>
          El ejercicio de la profesión y la seguridad de las instalaciones de gas en Chile se rigen por un marco normativo riguroso:
        </p>
        <ul style="display:flex; flex-direction:column; gap:0.6rem; margin-bottom:1.5rem; font-size:1rem;">
          <li>&bull; <strong>Decreto Supremo N° 191 (DS 191):</strong> Regula las licencias, exámenes de competencia y clasificación de los <em>Instaladores de Gas</em> ante la SEC (Clase 1, 2 y 3).</li>
          <li>&bull; <strong>Decreto Supremo N° 222 (DS 222):</strong> Norma técnica oficial que rige a todas las <em>Instalaciones Interiores de Gas construidas antes del año 2007</em>.</li>
          <li>&bull; <strong>Decreto Supremo N° 66 (DS 66):</strong> Reglamento técnico de seguridad para <em>Instalaciones Interiores de Gas construidas desde el año 2007 en adelante</em>.</li>
          <li>&bull; <strong>Decreto Supremo N° 20 (DS 20):</strong> Decreto que modificó y perfeccionó artículos clave del DS 66 actual vigente (ventilaciones, conductos de evacuación y artefactos).</li>
          <li>&bull; <strong>Decreto Supremo N° 67 (DS 67):</strong> Reglamenta las <em>Instalaciones de Gas de Red (Exterior)</em> y líneas matrices de las empresas distribuidoras y abastecedoras (Metrogas, Lipigas, Gasco, Abastible), con las cuales el instalador coordina el empalme y medidor.</li>
        </ul>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          Principales Responsabilidades de un Instalador SEC Clase 3
        </h2>

        <div style="display:grid; grid-template-columns:1fr; gap:1.25rem; margin:1.5rem 0;">
          <div style="background:#ffffff; border:1px solid var(--border-color); padding:1.25rem; border-radius:var(--radius-md); box-shadow:var(--shadow-sm);">
            <h3 style="color:var(--primary-blue); font-size:1.2rem; margin-bottom:0.4rem;">1. Diseño y Montaje de Redes en Cobre (DS 66, DS 222 y DS 20)</h3>
            <p style="font-size:0.95rem; color:var(--text-muted); margin-bottom:0;">Calcula caudales, pérdidas de carga, diámetros de cañerías y ejecuta soldaduras fuertes con aleación de plata conforme a la norma oficial.</p>
          </div>

          <div style="background:#ffffff; border:1px solid var(--border-color); padding:1.25rem; border-radius:var(--radius-md); box-shadow:var(--shadow-sm);">
            <h3 style="color:var(--primary-blue); font-size:1.2rem; margin-bottom:0.4rem;">2. Detección Electrónica y Sellado No Invasivo</h3>
            <p style="font-size:0.95rem; color:var(--text-muted); margin-bottom:0;">Emplea instrumental de vanguardia como gas trazador y geófonos para rastrear fugas milimétricas, aplicando polímeros de sellado como Prodoral R6-1 sin destruir pisos ni paredes.</p>
          </div>

          <div style="background:#ffffff; border:1px solid var(--border-color); padding:1.25rem; border-radius:var(--radius-md); box-shadow:var(--shadow-sm);">
            <h3 style="color:var(--primary-blue); font-size:1.2rem; margin-bottom:0.4rem;">3. Subsanación y Trámite para Sello Verde</h3>
            <p style="font-size:0.95rem; color:var(--text-muted); margin-bottom:0;">Corrige observaciones de Sello Rojo o Amarillo en edificios y viviendas, emite el informe técnico y tramita la Declaración TC6 ante la SEC.</p>
          </div>

          <div style="background:#ffffff; border:1px solid var(--border-color); padding:1.25rem; border-radius:var(--radius-md); box-shadow:var(--shadow-sm);">
            <h3 style="color:var(--primary-blue); font-size:1.2rem; margin-bottom:0.4rem;">4. Mantención de Calefont, Calderas y Evacuación de Gases</h3>
            <p style="font-size:0.95rem; color:var(--text-muted); margin-bottom:0;">Calibra quemadores, analiza emisiones de monóxido de carbono (CO) e instala chimeneas y conductos lisos certificados para prevenir asfixias.</p>
          </div>
        </div>

        <p>
          En <strong>Instalgas Chile</strong>, bajo la dirección de <strong><?= DIRECTOR_NAME ?></strong>, combinamos más de 40 años de oficio con el rigor técnico y la acreditación oficial SEC para que su hogar y su familia estén 100% protegidos.
        </p>

        <div style="text-align:center; margin-top:2.5rem;">
          <a href="<?= get_whatsapp_url('Hola Domingo Isaín, necesito contratar un servicio técnico certificado SEC.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
            Agendar Servicio con Instalador SEC (+56 9 4987 7316)
          </a>
        </div>
      </div>
    </div>
  </article>

  <?php 
  $faq_list = $article_faqs;
  require __DIR__ . '/includes/faq-section.php'; 
  ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
