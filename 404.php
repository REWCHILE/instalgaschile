<?php
/**
 * Página de Error 404 Personalizada
 * Instalgas Chile - https://instalgaschile.cl/404
 */
http_response_code(404);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$seo_config = [
    'title' => 'Página No Encontrada (Error 404) | Instalgas Chile',
    'description' => 'La página que busca no se encuentra disponible. Acceda a nuestros servicios de gasfitería certificada SEC en Santiago.',
    'canonical' => SITE_URL . '/404',
    'image' => SITE_URL . '/assets/img/hero-tecnico-gas-sec.webp',
    'type' => 'website'
];

$current_page = '404';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content" style="min-height: 65vh; display: flex; align-items: center; padding: 4rem 0;">
  <div class="container text-center" style="max-width: 720px; margin: 0 auto; text-align: center;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 84px; height: 84px; background: rgba(198, 40, 40, 0.1); color: var(--accent-red); border-radius: 50%; margin-bottom: 1.5rem;">
      <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
    </div>

    <h1 style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 800; color: var(--primary-blue); margin-bottom: 1rem;">
      Página No Encontrada
    </h1>

    <p style="font-size: 1.1rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 2rem;">
      La dirección a la que intentas acceder no existe o fue reorganizada durante la actualización del nuevo sitio web de <strong>Instalgas Chile</strong>.
    </p>

    <!-- Accesos Rápidos a Páginas Clave -->
    <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: 12px; padding: 2rem; box-shadow: var(--shadow-sm); margin-bottom: 2rem;">
      <h2 style="font-size: 1.15rem; color: var(--primary-blue); margin-bottom: 1.25rem;">
        ¿Qué servicio estás buscando?
      </h2>
      <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center;">
        <a href="<?= SITE_URL ?>/" class="btn btn-outline btn-sm">Portada Principal</a>
        <a href="<?= SITE_URL ?>/nosotros" class="btn btn-outline btn-sm">Sobre Nosotros</a>
        <a href="<?= SITE_URL ?>/deteccion-fugas-gas" class="btn btn-outline btn-sm">Detección de Fugas</a>
        <a href="<?= SITE_URL ?>/certificacion-sec" class="btn btn-outline btn-sm">Sello Verde y SEC</a>
        <a href="<?= SITE_URL ?>/servicios" class="btn btn-outline btn-sm">Todos los Servicios</a>
        <a href="<?= SITE_URL ?>/contacto" class="btn btn-outline btn-sm">Contacto</a>
      </div>
    </div>

    <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
      <a href="<?= SITE_URL ?>/" class="btn btn-secondary btn-lg">
        &larr; Volver al Inicio
      </a>
      <a href="<?= get_whatsapp_url('Hola Domingo Isaín, me encuentro en la web y requiero asistencia técnica.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.174.449.741.963 1.2 1.066.95 1.96 1.246 2.239 1.39.278.145.441.13.607-.058.166-.188.708-.824.896-1.113.188-.289.376-.241.636-.145.26.096 1.646.776 1.927.915.281.139.469.208.538.327.069.119.069.69-.075 1.095z"/></svg>
        <span>Hablar por WhatsApp (+56 9 4987 7316)</span>
      </a>
    </div>
  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
