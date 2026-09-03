<?php
/**
 * Guía Técnica: Cómo Verificar si un Gasfiter es Certificado SEC
 * Instalgas Chile - https://instalgaschile.cl/como-verificar-gasfiter-certificado-sec
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$article_faqs = [
    [
        'question' => '¿Dónde puedo verificar en línea el carnet de un instalador SEC?',
        'answer' => 'Puede ingresar directamente al portal oficial de la Superintendencia de Electricidad y Combustibles en www.sec.cl en la sección "Instaladores Autorizados", e ingresar el RUT o nombre del técnico para corroborar su vigencia y clase.'
    ],
    [
        'question' => '¿Qué clase de instalador SEC se requiere para edificios o comercios?',
        'answer' => 'Para edificios colectivos, industrias y grandes instalaciones se requiere un Instalador de Gas Clase 1 (máxima categoría legal), como Domingo Isaín Plaza Caamaño, quien está facultado para diseñar, ejecutar y tramitar proyectos sin límite de potencia.'
    ]
];

$seo_config = [
    'title' => 'Cómo Verificar si un Gasfiter es Certificado SEC en Chile | Guía Oficial',
    'description' => 'Aprenda a consultar el registro público de la SEC, validar el código QR de la credencial y comprobar la vigencia del técnico antes de permitir trabajos en su hogar.',
    'keywords' => 'como verificar gasfiter certificado sec, registro instaladores sec chile, consultar rut instalador sec, carnet instalador gas sec',
    'canonical' => SITE_URL . '/como-verificar-gasfiter-certificado-sec',
    'image' => SITE_URL . '/blog/verificar-gasfiter-certificado-sec.png',
    'type' => 'article',
    'faqs' => $article_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Blog', 'url' => SITE_URL . '/#blog'],
        ['name' => 'Cómo Verificar Gasfiter SEC', 'url' => SITE_URL . '/como-verificar-gasfiter-certificado-sec']
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
    <strong>Cómo Verificar un Gásfiter Certificado SEC</strong>
  </div>

  <article class="section" style="padding-top: 1.5rem;">
    <div class="container" style="max-width: 860px;">
      <span class="section-badge">Verificación y Transparencia</span>
      <h1 style="margin-bottom: 1.25rem;">Cómo Verificar si un Gasfiter es Certificado por la SEC: Paso a Paso</h1>
      
      <div style="display:flex; align-items:center; gap:1rem; margin-bottom:1.5rem; padding-bottom:1rem; border-bottom:1px solid var(--border-color); font-size:0.9rem; color:var(--text-muted);">
        <span>Por <strong><?= DIRECTOR_NAME ?></strong> (Instalador Autorizado SEC Clase 1)</span>
        <span>•</span>
        <time datetime="2026-01-07">7 de Enero de 2026</time>
      </div>

      <div style="margin-bottom: 2rem;">
        <img src="<?= SITE_URL ?>/blog/verificar-gasfiter-certificado-sec.png" alt="Cómo verificar si un gasfiter es certificado SEC en Chile" width="860" height="480" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); width:100%; height:auto;" loading="eager">
      </div>

      <div style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark);">
        <p>
          Antes de permitir que cualquier persona manipule las cañerías de gas, medidores, calefont o calderas de su propiedad, es su derecho y deber ciudadano solicitar y verificar su certificación. Aquí le enseñamos los métodos oficiales para comprobar que está ante un profesional autorizado.
        </p>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          Paso 1: Solicitar la Credencial Oficial SEC
        </h2>
        <p>
          Todo instalador acreditado cuenta con una tarjeta física o digital otorgada por la SEC. Esta credencial incluye obligatoriamente:
        </p>
        <ul style="display:flex; flex-direction:column; gap:0.5rem; margin-bottom:1.5rem;">
          <li>&bull; Nombre completo y RUT del instalador.</li>
          <li>&bull; Fotografía nítida del titular.</li>
          <li>&bull; Clase de licencia (Clase 1, Clase 2 o Clase 3).</li>
          <li>&bull; Código QR de validación instantánea.</li>
        </ul>

        <div style="text-align:center; margin:2rem 0;">
          <img src="<?= SITE_URL ?>/assets/img/credencial-sec-domingo-isain.jpg" alt="Ejemplo de Credencial Oficial SEC de Domingo Isaín Plaza Caamaño RUT 12.738.961-6" width="400" height="257" style="border-radius:var(--radius-md); box-shadow:var(--shadow-lg); border:2px solid var(--accent-red); margin:0 auto;" loading="lazy">
          <p style="font-size:0.85rem; color:var(--text-muted); margin-top:0.5rem;">Credencial oficial de Domingo Isaín Plaza Caamaño (RUT: 12.738.961-6).</p>
        </div>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          Paso 2: Escanear el Código QR con su Teléfono
        </h2>
        <p>
          Al apuntar la cámara de su smartphone al código QR de la credencial, el navegador lo dirigirá directamente al sitio seguro del Gobierno de Chile (sec.cl), donde se despliegan los datos oficiales del profesional, confirmando si su licencia está activa y sin suspensiones.
        </p>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          Paso 3: Consulta en el Registro Público Web de la SEC
        </h2>
        <p>
          Si no tiene el carnet a mano, puede ingresar a <strong>www.sec.cl</strong> &gt; <em>Instaladores Autorizados</em>, escribir el RUT del profesional (por ejemplo: <strong>12.738.961-6</strong>) y corroborar de inmediato su habilitación para ejecutar obras de gas.
        </p>

        <div style="text-align:center; margin-top:2.5rem;">
          <a href="<?= get_whatsapp_url('Hola Domingo Isaín, me gustaría solicitar una visita técnica con respaldo de su certificación SEC.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
            Consultar con Domingo Isaín (SEC) en WhatsApp
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
