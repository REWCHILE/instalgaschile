<?php
/**
 * Guía Técnica: Gasfiter Certificado vs Gasfiter No Certificado
 * Instalgas Chile - https://instalgaschile.cl/diferencia-gasfiter-certificado-y-no-certificado
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$article_faqs = [
    [
        'question' => '¿Qué sanciones legales arriesga un propietario si contrata un gásfiter no certificado?',
        'answer' => 'El propietario arriesga multas de la SEC, el corte inmediato del suministro de gas por parte de la empresa distribuidora (Metrogas, Lipigas, Gasco, Abastible) y, lo más grave, la anulación total de las pólizas de seguro de hogar o comunidad ante cualquier siniestro o explosión.'
    ],
    [
        'question' => '¿Por qué un gásfiter aficionado suele cobrar más barato inicialmente?',
        'answer' => 'Porque no cuenta con instrumental calibrado de detección, no está habilitado para firmar formularios TC6 ni emitir certificados SEC, no asume responsabilidad civil y suele recurrir a demolición invasiva de muros y pisos para buscar fugas a ciegas, lo que termina multiplicando los costos en albañilería.'
    ]
];

$seo_config = [
    'title' => 'Gasfiter Certificado vs No Certificado: Riesgos y Normativa SEC | Instalgas Chile',
    'description' => 'Conozca las diferencias críticas entre contratar un gasfiter autorizado SEC y un aficionado. Evite cortes de suministro, multas y riesgos fatales.',
    'keywords' => 'diferencia gasfiter certificado y no certificado, riesgos gasfiter aficionado, normativa sec gas chile, instalador autorizado sec santiago',
    'canonical' => SITE_URL . '/diferencia-gasfiter-certificado-y-no-certificado',
    'image' => SITE_URL . '/blog/gasfiter-certificado-vs-no-certificado.webp',
    'type' => 'article',
    'faqs' => $article_faqs,
    'breadcrumbs' => [
        ['name' => 'Inicio', 'url' => SITE_URL . '/'],
        ['name' => 'Blog', 'url' => SITE_URL . '/blog'],
        ['name' => 'Gasfiter Certificado vs No Certificado', 'url' => SITE_URL . '/diferencia-gasfiter-certificado-y-no-certificado']
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
    <strong>Gasfiter Certificado vs No Certificado</strong>
  </div>

  <article class="section" style="padding-top: 1.5rem;">
    <div class="container" style="max-width: 860px;">
      <span class="section-badge">Guía Oficial de Seguridad • SEC Chile</span>
      <h1 style="margin-bottom: 1.25rem;">Gasfiter Certificado SEC vs Gasfiter No Certificado: La Diferencia entre Seguridad y Peligro</h1>
      
      <div style="display:flex; align-items:center; gap:1rem; margin-bottom:1.5rem; padding-bottom:1rem; border-bottom:1px solid var(--border-color); font-size:0.9rem; color:var(--text-muted);">
        <span>Por <strong><?= DIRECTOR_NAME ?></strong> (Instalador Autorizado SEC Clase 3 • DS 191)</span>
        <span>•</span>
        <time datetime="2026-01-07">7 de Enero de 2026</time>
      </div>

      <div style="margin-bottom: 2rem;">
        <img src="<?= SITE_URL ?>/blog/gasfiter-certificado-vs-no-certificado.png" alt="Gasfiter certificado vs gasfiter no certificado en Chile" width="860" height="480" style="border-radius: var(--radius-md); box-shadow: var(--shadow-md); width:100%; height:auto;" loading="eager">
      </div>

      <div style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark);">
        <p>
          Cuando surge un problema en la red de gas, ya sea olor a combustible, baja presión o un calefont que no enciende, muchos propietarios se ven tentados a buscar la alternativa más económica o recurrir a un "maestro chasquilla". Sin embargo, en Chile el gas está clasificado como sustancia peligrosa y su manipulación indebida está penada por la ley.
        </p>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          1. Habilitación Legal: Decreto Supremo N° 191 y Norma Técnica DS 66
        </h2>
        <p>
          El <strong>Decreto Supremo N° 191</strong> de la Superintendencia de Electricidad y Combustibles (SEC) regula formalmente a los instaladores de gas y servicios técnicos en Chile, exigiendo que cualquier intervención en redes de gas licuado (GLP) o gas natural (GN) sea realizada exclusivamente por técnicos con licencia oficial otorgada tras rendir exámenes de competencia técnica. A su vez, el <strong>Decreto Supremo N° 66</strong> fija los requisitos técnicos y de seguridad de las instalaciones interiores.
        </p>
        <p>
          Un gásfiter certificado cuenta con un carnet oficial con RUT y registro público bajo el DS 191. Por el contrario, un gásfiter no certificado opera en la ilegalidad, lo que invalida cualquier reclamo ante Metrogas, Lipigas o las aseguradoras del hogar.
        </p>

        <h2 style="font-size:1.6rem; margin-top:2rem; margin-bottom:1rem; color:var(--primary-blue);">
          2. Consecuencias de Contratar a un Técnico No Autorizado
        </h2>
        <ul style="display:flex; flex-direction:column; gap:0.75rem; margin-bottom:1.5rem;">
          <li style="display:flex; align-items:flex-start; gap:0.6rem;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2.5" style="flex-shrink:0; margin-top:3px;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div><strong>Corte Inmediato del Suministro:</strong> Las compañías distribuidoras cortan el medidor si detectan modificaciones ejecutadas por personal no autorizado.</div>
          </li>
          <li style="display:flex; align-items:flex-start; gap:0.6rem;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2.5" style="flex-shrink:0; margin-top:3px;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div><strong>Pérdida de Cobertura de Seguros:</strong> En caso de fuga, asfixia por monóxido o deflagración, la póliza de seguro queda sin efecto si el peritaje no encuentra la firma de un instalador SEC.</div>
          </li>
          <li style="display:flex; align-items:flex-start; gap:0.6rem;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2.5" style="flex-shrink:0; margin-top:3px;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div><strong>Destrozos Innecesarios:</strong> Al no contar con gas trazador ni geófono, pican baldosas, porcelanatos y radier al azar, multiplicando los costos por diez.</div>
          </li>
        </ul>

        <div style="background: #ecfdf5; border-left: 4px solid var(--sec-green); padding: 1.5rem; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; margin: 2rem 0;">
          <h3 style="color:var(--sec-green-dark); margin-bottom:0.5rem; font-size:1.25rem;">El Compromiso de Instalgas Chile</h3>
          <p style="margin-bottom:0; color:#064e3b;">
            Todos nuestros proyectos y atenciones a domicilio son supervisados por el instalador <strong>Domingo Isaín Plaza Caamaño</strong> (RUT: 12.738.961-6), garantizando diagnósticos exactos, pruebas manométricas transparentes y documentación oficial para la obtención de Sello Verde.
          </p>
        </div>

        <div style="text-align:center; margin-top:2.5rem;">
          <a href="<?= get_whatsapp_url('Hola Domingo Isaín, leí su artículo sobre instaladores certificados y necesito agendar una revisión técnica.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
            Hablar con Instalador Certificado en WhatsApp (+56 9 4987 7316)
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
