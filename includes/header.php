<?php
/**
 * Header Global - Instalgas Chile
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="es-CL">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Google Fonts Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Preload de Fuentes WOFF2 para Cero Desplazamiento de Texto (0 CLS) -->
  <link rel="preload" href="https://fonts.gstatic.com/s/outfit/v15/QGYvz_MVcBeNP4NJtEtqUYLknw.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="https://fonts.gstatic.com/s/inter/v20/UcC73FwrK3iLTeHuS_nVMrMxCp50SjIa1ZL7W0Q5nw.woff2" as="font" type="font/woff2" crossorigin>

  <!-- Carga Asíncrona No Bloqueante de Google Fonts (display=swap) -->
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap">
  </noscript>

  <!-- CSS Crítico en Línea (Above-the-Fold Instantáneo - Cero CLS y 0ms bloqueo de LCP/FCP) -->
  <style>
    :root {
      --primary-blue: #0d254c;
      --primary-blue-dark: #07162e;
      --accent-red: #c62828;
      --sec-green: #10b981;
      --sec-green-dark: #059669;
      --bg-light: #f8fafc;
      --border-color: #e2e8f0;
      --text-dark: #0f172a;
      --text-muted: #475569;
      --font-heading: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      --font-body: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      --radius-sm: 6px;
      --radius-md: 10px;
      --radius-full: 9999px;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: var(--font-body); background-color: var(--bg-light); color: var(--text-dark); line-height: 1.6; -webkit-font-smoothing: antialiased; }
    .container { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 1.25rem; }
    
    /* Top Bar */
    .top-bar { background-color: #07152b; color: #ffffff; font-size: 0.85rem; padding: 0.5rem 0; min-height: 38px; }
    .top-bar-content { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 0.5rem; }
    .top-badge-sec { display: flex; align-items: center; gap: 0.5rem; font-weight: 600; color: #38bdf8; text-decoration: none; }
    .top-emergency-contact { display: flex; align-items: center; gap: 1.25rem; }
    .top-phone-link { color: #ffffff; text-decoration: none; display: flex; align-items: center; gap: 0.4rem; font-weight: 600; }
    
    /* Header */
    .site-header { background: #ffffff; box-shadow: 0 2px 8px rgba(13,37,76,0.08); position: sticky; top: 0; z-index: 100; min-height: 70px; }
    .navbar { display: flex; justify-content: space-between; align-items: center; height: 80px; }
    .brand-wrapper { display: flex; align-items: center; gap: 0.85rem; text-decoration: none; }
    .brand-logo-img { width: 58px; height: 58px; border-radius: 8px; flex-shrink: 0; }
    .brand-title { font-family: var(--font-heading); font-size: 1.45rem; font-weight: 800; color: var(--primary-blue); line-height: 1.1; }
    .brand-title span { color: var(--accent-red); }
    .brand-subtitle { font-size: 0.75rem; color: #059669; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; display: block; }
    .nav-menu { display: flex; align-items: center; gap: 1.75rem; list-style: none; }
    .menu-toggle { display: none; background: none; border: none; cursor: pointer; color: var(--primary-blue); }
    
    /* Hero - Cero Cambio de Diseño (CLS = 0) */
    .hero { background: radial-gradient(circle at 80% 20%, #173b75 0%, #0d254c 100%); color: #ffffff; padding: 3.5rem 0 4.5rem; position: relative; overflow: hidden; min-height: 560px; }
    .hero-grid { display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 3rem; align-items: center; position: relative; z-index: 2; }
    .hero-tagline { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255, 255, 255, 0.12); border: 1px solid rgba(255, 255, 255, 0.2); padding: 0.4rem 1rem; border-radius: var(--radius-full); font-size: 0.85rem; font-weight: 600; color: #e2e8f0; margin-bottom: 1.25rem; }
    .hero-title { font-family: var(--font-heading); font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.25rem; color: #ffffff; }
    .hero-title .highlight { color: #fca5a5; text-decoration: underline; text-decoration-color: var(--accent-red); display: inline-block; }
    .hero-subtitle { font-size: 1.125rem; color: #cbd5e1; margin-bottom: 2rem; line-height: 1.6; }
    .hero-ctas { display: flex; flex-wrap: wrap; gap: 1rem; margin-bottom: 2.25rem; }
    
    /* Credencial Card Hero */
    .hero-credential-wrapper { width: 100%; }
    .credential-card { background: #ffffff; border-radius: 12px; padding: 1.75rem; box-shadow: 0 10px 25px rgba(0,0,0,0.15); border: 1px solid var(--border-color); color: var(--text-dark); }
    .credential-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; padding-bottom: 0.75rem; border-bottom: 1px solid #e2e8f0; }
    .sec-stamp { display: inline-flex; align-items: center; gap: 0.4rem; background: rgba(16, 185, 129, 0.12); color: var(--sec-green-dark); font-weight: 800; font-size: 0.8rem; padding: 0.35rem 0.75rem; border-radius: 4px; }
    .credential-body { display: flex; gap: 1.25rem; align-items: center; margin-bottom: 1.25rem; }
    .credential-photo { width: 135px; height: 135px; min-width: 135px; aspect-ratio: 1/1; border-radius: 12px; object-fit: cover; flex-shrink: 0; }
    
    /* Botones Críticos */
    .btn { display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; font-family: var(--font-heading); font-weight: 700; font-size: 0.95rem; padding: 0.75rem 1.4rem; border-radius: var(--radius-sm); border: none; cursor: pointer; text-decoration: none; text-align: center; }
    .btn-whatsapp { background-color: #25d366; color: #ffffff; }
    .btn-primary { background-color: var(--accent-red); color: #ffffff; }
    .btn-secondary { background-color: var(--primary-blue); color: #ffffff; }
    .btn-outline { background: transparent; color: var(--primary-blue); border: 2px solid var(--primary-blue); }
    .btn-lg { padding: 0.95rem 1.85rem; font-size: 1.1rem; }
    .btn-sm { padding: 0.4rem 0.85rem; font-size: 0.85rem; }
    
    @media (max-width: 991px) {
      .navbar { height: 70px; }
      .nav-menu { display: none; }
      .menu-toggle { display: block; }
      .hero-grid { grid-template-columns: 1fr; gap: 2.5rem; }
      .hero-title { font-size: 2rem; }
    }
  </style>

  <!-- Carga Asíncrona de la Hoja de Estilos Completa -->
  <link rel="preload" as="style" href="<?= SITE_URL ?>/assets/css/style.css" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/style.css">
  </noscript>

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
