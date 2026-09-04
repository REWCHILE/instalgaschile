<?php
/**
 * Portal Principal del Blog y Guías Técnicas
 * Instalgas Chile - https://instalgaschile.cl/blog
 */
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/seo.php';

$blog_faqs = [
    [
        'question' => '¿Quién redacta y supervisa los artículos técnicos del blog?',
        'answer' => 'Todos los contenidos y guías prácticas son redactados y supervisados directamente por Domingo Isaín Plaza Caamaño, Instalador de Gas Autorizado SEC Clase 3 (RUT 12.738.961-6), con más de 40 años de trayectoria técnica y más de 40.000 servicios ejecutados en Chile.'
    ],
    [
        'question' => '¿Cada cuánto tiempo se actualizan las guías técnicas?',
        'answer' => 'Nuestras guías se actualizan periódicamente ante cada modificación regulatoria de la SEC, incluyendo los Decretos Supremos DS 66, DS 222, DS 191 y DS 20, asegurando a los propietarios información fidedigna y vigente.'
    ],
    [
        'question' => '¿Puedo solicitar una visita técnica a partir de las dudas tratadas en estos artículos?',
        'answer' => 'Por supuesto. Al final de cada guía encontrará un enlace directo para contactar a nuestra central de atención técnica vía WhatsApp o llamada telefónica para agendar una inspección a domicilio.'
    ]
];

$seo_config = [
    'title' => 'Blog Técnico de Gasfitería e Instalaciones SEC | Instalgas Chile',
    'description' => 'Guías oficiales, normativas de la SEC (DS 191, DS 66) y consejos de seguridad sobre gas. Aprenda a verificar instaladores, detectar fugas sin romper y regularizar Sello Verde.',
    'keywords' => 'blog gasfiter sec, guias gasfiteria santiago, normativa gas sec chile, como saber si gasfiter es sec, regularizacion sello verde gas, deteccion fugas gas trazador',
    'canonical' => SITE_URL . '/blog',
    'image' => SITE_URL . '/assets/img/og-instalgas-share.jpg',
    'type' => 'website',
    'faqs' => $blog_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Blog', 'url' => SITE_URL . '/blog']
    ]
];

// Artículos del Blog disponibles
$articles = [
    [
        'slug' => 'diferencia-gasfiter-certificado-y-no-certificado',
        'title' => 'Gasfiter Certificado SEC vs No Certificado: La Diferencia entre Seguridad y Peligro',
        'excerpt' => 'Descubra por qué contratar a un gásfiter no autorizado puede ocasionar el corte inmediato del servicio por Metrogas, multas y la anulación de la póliza de seguro de hogar.',
        'image' => SITE_URL . '/blog/gasfiter-certificado-vs-no-certificado.webp',
        'badge' => 'Normativa & Seguridad',
        'date' => '7 de Enero de 2026',
        'read_time' => '6 min',
        'featured' => true
    ],
    [
        'slug' => 'como-verificar-gasfiter-certificado-sec',
        'title' => 'Cómo Verificar si un Gasfiter es Certificado por la SEC: Paso a Paso',
        'excerpt' => 'Aprenda a consultar el registro público oficial de instaladores autorizados (DS 191), validar el código QR de la credencial y confirmar la vigencia del profesional.',
        'image' => SITE_URL . '/blog/verificar-gasfiter-certificado-sec.webp',
        'badge' => 'Verificación Oficial',
        'date' => '7 de Enero de 2026',
        'read_time' => '4 min',
        'featured' => false
    ],
    [
        'slug' => 'que-hace-un-gasfiter-certificado-sec',
        'title' => '¿Qué Hace un Gasfiter Certificado SEC? Ámbito Legal y Técnico (DS 191)',
        'excerpt' => 'Conozca las atribuciones legales de un instalador Clase 3: montaje de cañerías de cobre según DS 66, pruebas de hermeticidad y regularización de Sello Verde.',
        'image' => SITE_URL . '/blog/funciones-gasfiter-certificado-sec.webp',
        'badge' => 'Ámbito Técnico SEC',
        'date' => '7 de Enero de 2026',
        'read_time' => '5 min',
        'featured' => false
    ],
    [
        'slug' => 'gasfiter-certificado-sec-vitacura',
        'title' => 'Gásfiter Certificado SEC en Vitacura y Sector Oriente: Precisión y Normativa',
        'excerpt' => 'Soluciones especializadas para residencias y departamentos de alto estándar: localización no destructiva de fugas en pisos nobles y subsanación de sellos rojos.',
        'image' => SITE_URL . '/blog/asfiter-certificado-sec-vitacura.webp',
        'badge' => 'Sector Oriente',
        'date' => '15 de Enero de 2026',
        'read_time' => '5 min',
        'featured' => false
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main id="main-content">
  <!-- Migas de Pan (Breadcrumbs) -->
  <div class="container breadcrumbs" aria-label="Migas de pan">
    <a href="<?= SITE_URL ?>/">Inicio</a>
    <span>&rsaquo;</span>
    <strong>Blog y Guías Técnicas</strong>
  </div>

  <!-- Portada / Cabecera del Blog -->
  <section class="section" style="padding-top: 2rem; padding-bottom: 3rem; background: linear-gradient(180deg, #ffffff 0%, var(--bg-light) 100%);">
    <div class="container">
      <div class="section-header" style="text-align: center; max-width: 840px; margin: 0 auto 2.5rem;">
        <span class="section-badge">Educación, Prevención y Normativa SEC</span>
        <h1 style="font-size: 2.5rem; margin-top: 0.5rem; margin-bottom: 1rem; color: var(--primary-blue);">
          Guías Técnicas y Consejos de Seguridad en Instalaciones de Gas
        </h1>
        <p style="font-size: 1.15rem; color: var(--text-muted); line-height: 1.6;">
          Artículos redactados bajo el marco legal chileno (DS 191, DS 66, DS 222 y DS 20), respaldados por los 40 años de experiencia del instalador autorizado SEC <strong><?= DIRECTOR_NAME ?></strong>.
        </p>
      </div>

      <!-- Tarjeta de Respaldo Técnico del Autor -->
      <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem 2rem; max-width: 900px; margin: 0 auto 3rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
        <div style="display: flex; align-items: center; gap: 1.25rem;">
          <img src="<?= SITE_URL ?>/assets/img/domingo-isain-plaza.webp" alt="<?= DIRECTOR_NAME ?>" width="75" height="75" style="border-radius: 50%; object-fit: cover; border: 3px solid var(--sec-green);">
          <div>
            <span style="font-size: 0.75rem; font-weight: 800; color: var(--sec-green-dark); text-transform: uppercase; letter-spacing: 0.05em; display: block;">Director Técnico de Contenidos</span>
            <strong style="font-size: 1.2rem; color: var(--primary-blue);"><?= DIRECTOR_NAME ?></strong>
            <span style="display: block; font-size: 0.85rem; color: var(--text-muted);">Instalador Autorizado SEC Clase 3 • RUT: <?= DIRECTOR_RUT ?></span>
          </div>
        </div>
        <div style="display: flex; align-items: center; gap: 1rem;">
          <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" title="Consultar acreditación en el portal de la SEC">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span>Verificar Carnet SEC &nearr;</span>
          </a>
          <a href="<?= get_whatsapp_url('Hola Domingo Isaín, leí su blog y tengo una consulta sobre mi instalación de gas.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm">
            <span>Consultar por WhatsApp</span>
          </a>
        </div>
      </div>

      <!-- Grid de Artículos del Blog -->
      <div class="blog-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <?php foreach ($articles as $art): ?>
          <article class="blog-card" style="display: flex; flex-direction: column; background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-md); overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: transform 0.2s, box-shadow 0.2s;">
            <a href="<?= SITE_URL ?>/<?= $art['slug'] ?>" style="display: block; overflow: hidden; position: relative;" aria-label="Leer <?= htmlspecialchars($art['title']) ?>">
              <img src="<?= $art['image'] ?>" alt="<?= htmlspecialchars($art['title']) ?>" width="400" height="225" style="width: 100%; height: 210px; object-fit: cover; display: block;" loading="lazy">
              <span style="position: absolute; top: 12px; left: 12px; background: rgba(7, 21, 44, 0.85); backdrop-filter: blur(4px); color: #ffffff; font-size: 0.75rem; font-weight: 700; padding: 4px 10px; border-radius: 4px; border: 1px solid rgba(255,255,255,0.2);">
                <?= htmlspecialchars($art['badge']) ?>
              </span>
            </a>
            
            <div class="blog-body" style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1;">
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem; font-size: 0.85rem; color: var(--text-muted);">
                <time><?= $art['date'] ?></time>
                <span>Lectura: <?= $art['read_time'] ?></span>
              </div>

              <h2 style="font-size: 1.25rem; font-weight: 700; line-height: 1.35; margin-bottom: 0.85rem; color: var(--primary-blue);">
                <a href="<?= SITE_URL ?>/<?= $art['slug'] ?>" style="color: inherit; text-decoration: none;">
                  <?= htmlspecialchars($art['title']) ?>
                </a>
              </h2>

              <p style="font-size: 0.95rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.5rem; flex-grow: 1;">
                <?= htmlspecialchars($art['excerpt']) ?>
              </p>

              <div style="margin-top: auto; padding-top: 1rem; border-top: 1px solid #f1f5f9; display: flex; align-items: center; justify-content: space-between;">
                <a href="<?= SITE_URL ?>/<?= $art['slug'] ?>" class="btn btn-outline btn-sm" aria-label="Leer guía técnica <?= htmlspecialchars($art['title']) ?>">
                  Leer Guía Completa &rarr;
                </a>
                <span style="font-size: 0.8rem; color: var(--sec-green-dark); font-weight: 700;">SEC Vigente</span>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Banner de Llamado a la Acción para Visita Técnica -->
  <section class="section section-alt" style="background: linear-gradient(135deg, #07152b 0%, #0d254c 100%); color: #ffffff; padding: 4rem 0;">
    <div class="container" style="text-align: center; max-width: 800px;">
      <span class="section-badge" style="background: rgba(56, 189, 248, 0.15); color: #38bdf8; border-color: rgba(56, 189, 248, 0.3);">Asistencia Inmediata</span>
      <h2 style="font-size: 2.2rem; margin-top: 0.75rem; margin-bottom: 1rem; color: #ffffff;">¿Sospecha una Fuga de Gas o Necesita Certificación SEC?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 2rem; line-height: 1.6;">
        No asuma riesgos innecesarios. Contamos con instrumental electrónico de gas trazador y geófono para solucionar su problema sin demoliciones y con total respaldo legal.
      </p>
      <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
        <a href="<?= get_whatsapp_url('Hola Domingo Isaín, leí su blog y requiero atención técnica por un servicio de gas.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" style="margin-right:8px;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
          Solicitar Evaluación por WhatsApp
        </a>
        <a href="tel:+<?= PHONE_RAW ?>" class="btn btn-outline btn-lg" style="color: #ffffff; border-color: rgba(255,255,255,0.4);">
          Llamar al <?= PHONE_DISPLAY ?>
        </a>
      </div>
    </div>
  </section>

  <!-- Inclusión de FAQ -->
  <?php 
  $faq_list = $blog_faqs;
  require_once __DIR__ . '/../includes/faq-section.php'; 
  ?>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
