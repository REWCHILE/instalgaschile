<?php
/**
 * Header Global - Instalgas Chile
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

$request_path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
$path_segment = explode('/', $request_path)[0] ?? '';

if ($path_segment === 'blog') {
    $current_page = 'blog';
} elseif (!empty($path_segment)) {
    $current_page = basename($path_segment, '.php');
} else {
    $current_page = basename($_SERVER['PHP_SELF'] ?? '', '.php');
    if ($current_page === '' || $current_page === 'index') {
        $current_page = 'index';
    }
}
?>
<!DOCTYPE html>
<html lang="es-CL">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Fuentes Autohospedadas Locales (Cero Peticiones a Servidores Externos y Cero Cadena Crítica) -->
  <link rel="preload" href="/assets/fonts/outfit-latin.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/assets/fonts/inter-latin.woff2" as="font" type="font/woff2" crossorigin>

  <!-- Hoja de Estilos Centralizada en Línea (Cero Bloqueo de Red, Cero Peticiones Encadenadas y Cero Desplazamiento CLS = 0.00) -->
  <style>
    <?php readfile(__DIR__ . '/../assets/css/style.css'); ?>
  </style>

  <!-- Favicons WebP -->
  <link rel="icon" type="image/webp" href="<?= SITE_URL ?>/assets/img/logo-instalgas.webp">
  <link rel="apple-touch-icon" href="<?= SITE_URL ?>/assets/img/logo-instalgas.webp">

  <!-- Javascript Diferido (Sin bloqueo del hilo principal) -->
  <script src="<?= SITE_URL ?>/assets/js/main.js" defer></script>

  <!-- Metadatos SEO específicos de la página -->
  <?php if (isset($seo_config)) render_seo_meta($seo_config); ?>
</head>
<body>

  <!-- Top Bar con Urgencias y Respaldo SEC -->
  <aside class="top-bar" aria-label="Aviso de urgencias y certificación SEC">
    <div class="container top-bar-content">
      <a href="<?= SEC_VALIDATION_URL ?>" target="_blank" rel="noopener noreferrer" class="top-badge-sec" style="text-decoration:none;" title="Verificar Certificado SEC Oficial en el portal del Gobierno de Chile (Estado: ACTIVO)">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <span>Instalador Autorizado SEC Clase 3 • RUT: <?= DIRECTOR_RUT ?> <span style="background:#047857; color:#ffffff; font-size:0.7rem; font-weight:800; padding:2px 7px; border-radius:3px; margin-left:4px;">ACTIVO &nearr;</span></span>
      </a>
      <div class="top-emergency-contact">
        <a href="tel:+<?= PHONE_RAW ?>" class="top-phone-link" aria-label="Llamar a nuestra central de emergencias al <?= PHONE_DISPLAY ?>">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <span>Central: <?= PHONE_DISPLAY ?></span>
        </a>
        <a href="<?= get_whatsapp_url('Hola Instalgas Chile, tengo una urgencia por fuga o problema de gas.') ?>" target="_blank" rel="noopener noreferrer" class="top-phone-link" aria-label="Escribir al WhatsApp de emergencias 24/7">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#25d366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
          <span style="color:#86efac; font-weight:700;">Urgencias 24/7</span>
        </a>
      </div>
    </div>
  </aside>

  <!-- Header y Navegación Principal -->
  <header class="site-header" role="banner">
    <div class="container navbar">
      <a href="<?= SITE_URL ?>/" class="brand-wrapper" aria-label="Ir a la portada de Instalgas Chile">
        <img src="<?= SITE_URL ?>/assets/img/logo-instalgas.webp" alt="Logotipo Gásfiter Certificado SEC Instalgas Chile" class="brand-logo-img" width="58" height="58" fetchpriority="high">
        <div class="brand-text">
          <span class="brand-title">INSTALGAS <span>CHILE</span></span>
          <span class="brand-subtitle">Instalador Certificado SEC</span>
        </div>
      </a>

      <!-- Menú de navegación accesible sin extensión .php -->
      <nav id="navMenu" class="nav-menu" role="navigation" aria-label="Menú principal">
        <a href="<?= SITE_URL ?>/" class="nav-link <?= ($current_page == 'index' || $current_page == '') ? 'active' : '' ?>">Inicio</a>
        <a href="<?= SITE_URL ?>/nosotros" class="nav-link <?= ($current_page == 'nosotros') ? 'active' : '' ?>">Nosotros</a>
        <a href="<?= SITE_URL ?>/certificacion-sec" class="nav-link <?= ($current_page == 'certificacion-sec') ? 'active' : '' ?>">Certificación SEC</a>
        <a href="<?= SITE_URL ?>/deteccion-fugas-gas" class="nav-link <?= ($current_page == 'deteccion-fugas-gas') ? 'active' : '' ?>">Detección de Fugas</a>
        <a href="<?= SITE_URL ?>/servicios" class="nav-link <?= ($current_page == 'servicios') ? 'active' : '' ?>">Servicios</a>
        <a href="<?= SITE_URL ?>/blog" class="nav-link <?= (in_array($current_page, ['blog', 'como-verificar-gasfiter-certificado-sec', 'diferencia-gasfiter-certificado-y-no-certificado', 'que-hace-un-gasfiter-certificado-sec', 'gasfiter-certificado-sec-vitacura'])) ? 'active' : '' ?>">Blog</a>
        <a href="<?= SITE_URL ?>/contacto" class="nav-link <?= ($current_page == 'contacto') ? 'active' : '' ?>">Contacto</a>
      </nav>

      <div class="nav-actions">
        <a href="<?= get_whatsapp_url('Hola Domingo Isaín, solicito cotización para servicio técnico de gas.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm" aria-label="Pedir cotización por WhatsApp al +56 9 4987 7316">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <span>Cotizar Ahora</span>
        </a>

        <button id="menuToggle" class="menu-toggle" aria-label="Abrir menú de opciones" aria-expanded="false" aria-controls="navMenu">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
      </div>
    </div>
  </header>
