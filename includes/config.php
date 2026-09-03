<?php
/**
 * Configuración Global - Instalgas Chile
 * https://instalgaschile.cl
 */

// Detección dinámica de URL base (soporta local Laragon y producción)
$isHttps = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
$protocol = $isHttps ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'instalgaschile.cl';
define('SITE_URL', $protocol . $host);

// Datos de Identidad Corporativa y Contacto
define('SITE_NAME', 'Instalgas Chile');
define('SITE_SLOGAN', 'Instalador de Gas Certificado SEC y Detección de Fugas');
define('LEGAL_NAME', 'Instalgaschile SpA');
define('DIRECTOR_NAME', 'Domingo Isaín Plaza Caamaño');
define('DIRECTOR_RUT', '12.738.961-6');
define('DIRECTOR_SEC', 'Instalador Autorizado SEC Clase 3');

// Canales de Contacto Directo
define('PHONE_RAW', '56949877316');
define('PHONE_DISPLAY', '+56 9 4987 7316');
define('WHATSAPP_NUMBER', '56949877316');
define('WHATSAPP_BASE_URL', 'https://wa.me/56949877316');
define('CONTACT_EMAIL', 'contacto@instalgaschile.cl');
define('CENTRAL_ADDRESS', 'Av. Libertador Bernardo O\'Higgins 1302, Santiago, Región Metropolitana');
define('CITY', 'Santiago');
define('COUNTRY', 'Chile');
define('HOURS_EMERGENCY', 'Atención de Urgencias 24/7');
define('HOURS_REGULAR', 'Lunes a Domingo de 08:00 a 21:00 hrs');

// Cobertura Principal
$coverage_areas = [
    'Las Condes', 'Vitacura', 'Lo Barnechea', 'Providencia', 'Ñuñoa', 
    'La Reina', 'Santiago Centro', 'Peñalolén', 'La Florida', 'Maipú', 
    'San Miguel', 'Macul', 'La Cisterna', 'Huechuraba', 'Colina / Chicureo',
    'Viña del Mar', 'Valparaíso', 'Quilpué', 'Concón'
];

/**
 * Genera un enlace de WhatsApp con mensaje personalizado codificado
 */
function get_whatsapp_url($custom_message = '') {
    if (empty($custom_message)) {
        $custom_message = "Hola Instalgas Chile, necesito una cotización urgente con el instalador SEC Domingo Isaín.";
    }
    return WHATSAPP_BASE_URL . '?text=' . rawurlencode($custom_message);
}
