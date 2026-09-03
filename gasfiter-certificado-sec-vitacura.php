<?php
/**
 * Guía Técnica: Gásfiter Certificado SEC en Vitacura y Zona Oriente
 * Instalgas Chile - https://instalgaschile.cl/gasfiter-certificado-sec-vitacura
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$article_faqs = [
    [
        'question' => '¿Por qué es indispensable un gásfiter certificado SEC en Vitacura y el sector oriente?',
        'answer' => 'Las propiedades en Vitacura, Las Condes y Lo Barnechea cuentan con complejas redes empotradas de cobre, calderas de alta potencia y estrictas exigencias de administración de condominios. Un instalador SEC Clase 3 garantiza el cumplimiento riguroso del DS 66 y evita cortes de Metrogas o rechazos en inspecciones periódicas de Sello Verde.'
    ],
    [
        'question' => '¿Se pueden detectar fugas de gas en pisos de mármol o porcelanato sin romper?',
        'answer' => 'Sí. En Instalgas Chile empleamos tecnología acústica y gas trazador (mezcla de nitrógeno e hidrógeno no inflamable) para localizar con precisión milimétrica cualquier microfuga sin realizar demoliciones invasivas en pisos nobles ni muros decorativos.'
    ],
    [
        'question' => '¿Qué plazo de respuesta tienen para urgencias en Vitacura?',
        'answer' => 'Contamos con cuadrillas técnicas de rápida respuesta para el sector oriente de Santiago, con un tiempo estimado de arribo de 30 a 60 minutos ante olor a gas o notificaciones de Sello Rojo emitidas por la distribuidora.'
    ]
];

$seo_config = [
    'title' => 'Gasfiter Certificado SEC en Vitacura | Detección sin Romper y Sello Verde',
    'description' => 'Servicio técnico especializado en gasfitería e instalaciones de gas certificado SEC en Vitacura, Las Condes y Sector Oriente. Detección no destructiva de fugas.',
    'keywords' => 'gasfiter certificado sec vitacura, instalador de gas vitacura, deteccion de fugas sin picar vitacura, sello verde gas vitacura, gasfiter autorizado sec las condes vitacura',
    'canonical' => SITE_URL . '/gasfiter-certificado-sec-vitacura',
    'image' => SITE_URL . '/blog/asfiter-certificado-sec-vitacura.png',
    'type' => 'article',
    'faqs' => $article_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Blog', 'url' => SITE_URL . '/blog'],
        ['name' => 'Gasfiter SEC en Vitacura', 'url' => SITE_URL . '/gasfiter-certificado-sec-vitacura']
    ]
];

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <div class="container breadcrumbs" aria-label="Migas de pan">
    <a href="<?= SITE_URL ?>/">Inicio</a>
    <span>&rsaquo;</span>
    <a href="<?= SITE_URL ?>/blog">Blog</a>
    <span>&rsaquo;</span>
    <strong>Gásfiter Certificado SEC en Vitacura y Zona Oriente</strong>
  </div>

  <article class="section" style="padding-top: 1.5rem;">
    <div class="container" style="max-width: 860px;">
      <span class="section-badge">Cobertura Especializada • Sector Oriente</span>
      <h1 style="margin-bottom: 1.25rem;">Gásfiter Certificado SEC en Vitacura: Soluciones de Alta Precisión y Cumplimiento Normativo</h1>
      
      <div style="display:flex; align-items:center; gap:1rem; margin-bottom:1.5rem; padding-bottom:1rem; border-bottom:1px solid var(--border-color); font-size:0.9rem; color:var(--text-muted);">
        <span>Por <strong><?= DIRECTOR_NAME ?></strong> (Instalador Autorizado SEC Clase 3 • DS 191)</span>
        <span>•</span>
        <time datetime="2026-01-15">15 de Enero de 2026</time>
        <span>•</span>
        <span>Lectura: 5 min</span>
      </div>

      <div style="margin-bottom: 2rem;">
        <img src="<?= SITE_URL ?>/blog/asfiter-certificado-sec-vitacura.png" alt="Instalaciones de gas y gasfitería certificada SEC en Vitacura y sector oriente" width="860" height="480" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); width:100%; height:auto;" loading="eager">
      </div>

      <div style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark);">
        <p>
          Las viviendas unifamiliares, condominios residenciales y departamentos de alto estándar en la comuna de <strong>Vitacura</strong>, así como en <strong>Las Condes</strong> y <strong>Lo Barnechea</strong>, presentan particularidades técnicas muy específicas en sus sistemas de gas: calderas de condensación de gran potencia, redes de cobre empotradas bajo finos revestimientos, calefacción central por losa radiante y artefactos de última generación.
        </p>

        <p>
          Intervenir estos sistemas requiere un nivel de calificación técnica que solo un <strong>Instalador Autorizado por la SEC</strong> puede brindar, garantizando la total hermeticidad de la instalación y la tranquilidad de su familia.
        </p>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          1. Detección de Fugas sin Romper Muros ni Porcelanatos
        </h2>
        <p>
          Uno de los mayores temores de los residentes en Vitacura al sospechar una fuga de gas es el daño estético que provoca un gásfiter tradicional picando muros o levantando pisos de madera y porcelanato. En <strong>Instalgas Chile</strong> utilizamos tecnología no destructiva:
        </p>
        <ul style="display:flex; flex-direction:column; gap:0.5rem; margin-bottom:1.5rem;">
          <li>&bull; <strong>Inyección de Gas Trazador:</strong> Vaciamos la red e introducimos una mezcla de nitrógeno e hidrógeno al 5%, inocua e incombustible, capaz de traspasar cualquier microfisura.</li>
          <li>&bull; <strong>Sensores Espectrométricos y Geófonos:</strong> Localizamos el punto exacto del escape con precisión centimétrica a través del suelo o muro.</li>
          <li>&bull; <strong>Sellado con Prodoral R6-1:</strong> Si la fuga se encuentra en tramos inaccesibles, sellamos internamente la tubería con polímero alemán certificado sin abrir una sola pared.</li>
        </ul>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          2. Regularización de Sello Rojo y Certificación Sello Verde SEC
        </h2>
        <p>
          En los edificios y condominios de Vitacura, las inspecciones periódicas de gas (Decreto Supremo N° 66) son de carácter obligatorio. Un <strong>Sello Rojo</strong> o corte de suministro por parte de Metrogas exige una intervención inmediata:
        </p>
        <ul style="display:flex; flex-direction:column; gap:0.5rem; margin-bottom:1.5rem;">
          <li>&bull; Corrección de ventilaciones reglamentarias en recintos con calderas o calefont.</li>
          <li>&bull; Reemplazo de llaves de paso antiguas por válvulas esféricas de 1/4 de vuelta aprobadas por la SEC.</li>
          <li>&bull; Pruebas de hermeticidad a 1.5 veces la presión nominal de trabajo según normativa vigente.</li>
          <li>&bull; Emisión y firma de documentación técnica para el levantamiento expedito del corte de gas.</li>
        </ul>

        <div style="display:flex; justify-content:center; gap:2rem; flex-wrap:wrap; margin:2.5rem 0; align-items:center; background:#ffffff; padding:1.5rem; border-radius:12px; border:1px solid var(--border-color); box-shadow:0 4px 12px rgba(0,0,0,0.05);">
          <div style="text-align:center;">
            <img src="<?= SITE_URL ?>/assets/img/domingo-isain-plaza.webp" alt="Instalador Autorizado SEC Domingo Isaín Plaza Caamaño RUT 12.738.961-6" width="140" height="140" style="border-radius:12px; box-shadow:var(--shadow-md); border:3px solid var(--primary-blue); object-fit:cover; display:block; margin:0 auto;" loading="lazy">
            <p style="font-size:0.85rem; color:var(--text-muted); margin-top:0.5rem; font-weight:600;">Domingo Isaín Plaza Caamaño<br><span style="color:#059669;">Instalador SEC Clase 3 (Vigente)</span></p>
          </div>
          <div style="text-align:center;">
            <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" title="Validar en portal oficial de la SEC">
              <img src="<?= SITE_URL ?>/assets/img/qr-sec-domingo-isain.webp" alt="Código QR de Validación Oficial SEC de Domingo Isaín Plaza Caamaño" width="140" height="140" style="border-radius:12px; box-shadow:var(--shadow-md); border:3px solid #0284c7; background:#ffffff; padding:6px; display:block; margin:0 auto; cursor:pointer;" loading="lazy">
            </a>
            <p style="font-size:0.85rem; color:#0284c7; margin-top:0.5rem; font-weight:700;">Validación Oficial SEC (Clic &nearr;)</p>
          </div>
        </div>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          3. Cobertura Prioritaria y Atención Inmediata en Sector Oriente
        </h2>
        <p>
          Disponemos de móviles equipados con instrumental de diagnóstico en <strong>Av. Vitacura, Alonso de Córdova, Santa María de Manquehue, Lo Curro, Tabancura y La Dehesa</strong>. Frente a cualquier emergencia por olor a gas, sospecha de fuga o falla de caldera, atendemos de manera prioritaria las 24 horas del día.
        </p>

        <div style="text-align:center; margin-top:2.5rem; background:linear-gradient(135deg, #07152b 0%, #0d254c 100%); padding:2.5rem 1.5rem; border-radius:12px; color:#ffffff;">
          <h3 style="font-size:1.5rem; margin-bottom:0.75rem; color:#ffffff;">¿Requiere una Visita Técnica en Vitacura o Zona Oriente?</h3>
          <p style="color:#cbd5e1; margin-bottom:1.5rem; font-size:1rem;">
            Coordine directamente con el instalador SEC Domingo Isaín. Evaluación rápida y presupuesto claro.
          </p>
          <a href="<?= get_whatsapp_url('Hola Domingo Isaín, necesito atención técnica urgente de gas en Vitacura / Sector Oriente.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" style="margin-right:8px;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
            Contactar por WhatsApp (+56 9 4987 7316)
          </a>
        </div>
      </div>

      <!-- Artículos Relacionados -->
      <div style="margin-top: 3.5rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
        <h3 style="font-size: 1.35rem; margin-bottom: 1.5rem; color: var(--primary-blue);">Otras Guías Técnicas del Blog</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem;">
          <a href="<?= SITE_URL ?>/diferencia-gasfiter-certificado-y-no-certificado" style="text-decoration:none; color:inherit; background:#ffffff; border:1px solid var(--border-color); border-radius:8px; padding:1.2rem; display:block; transition:box-shadow 0.2s;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
            <strong style="color:var(--primary-blue); font-size:1rem; display:block; margin-bottom:0.5rem;">Gasfiter Certificado vs No Certificado</strong>
            <p style="font-size:0.85rem; color:var(--text-muted); margin:0;">Conozca los riesgos legales y técnicos de contratar a personas no autorizadas.</p>
          </a>
          <a href="<?= SITE_URL ?>/como-verificar-gasfiter-certificado-sec" style="text-decoration:none; color:inherit; background:#ffffff; border:1px solid var(--border-color); border-radius:8px; padding:1.2rem; display:block; transition:box-shadow 0.2s;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
            <strong style="color:var(--primary-blue); font-size:1rem; display:block; margin-bottom:0.5rem;">Cómo Verificar un Gasfiter SEC</strong>
            <p style="font-size:0.85rem; color:var(--text-muted); margin:0;">Paso a paso para consultar el registro público de la SEC y validar el código QR.</p>
          </a>
          <a href="<?= SITE_URL ?>/que-hace-un-gasfiter-certificado-sec" style="text-decoration:none; color:inherit; background:#ffffff; border:1px solid var(--border-color); border-radius:8px; padding:1.2rem; display:block; transition:box-shadow 0.2s;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
            <strong style="color:var(--primary-blue); font-size:1rem; display:block; margin-bottom:0.5rem;">¿Qué Hace un Gasfiter SEC?</strong>
            <p style="font-size:0.85rem; color:var(--text-muted); margin:0;">Campo de acción técnico de la licencia Clase 3 según el Decreto Supremo 191.</p>
          </a>
        </div>
      </div>
    </div>
  </article>

  <!-- Inclusión de FAQ -->
  <?php 
  $faq_list = $article_faqs;
  require_once __DIR__ . '/includes/faq-section.php'; 
  ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
