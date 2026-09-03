<?php
/**
 * Router para el servidor integrado de PHP (php -S)
 * Permite la navegación con URLs limpias idéntica a Apache (.htaccess)
 */

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$fullPath = __DIR__ . $path;

$legacyRedirects = [
    '/gasfiter-certificado-sec' => '/certificacion-sec',
    '/certificacion-sec-de-gas' => '/certificacion-sec',
    '/instalacion-de-gas-santiago' => '/servicios#redes',
    '/deteccion-de-fugas-de-gas' => '/deteccion-fugas-gas',
    '/sellado-de-fugas-de-gas' => '/servicios#prodoral',
    '/contacto-gasfiter-a-domicilio' => '/contacto'
];

$trimmed = rtrim($path, '/');
if (isset($legacyRedirects[$trimmed])) {
    header('Location: ' . $legacyRedirects[$trimmed], true, 301);
    exit;
}

// Si el archivo estático existe físicamente (imágenes, CSS, JS, etc.), servirlo directamente
if ($path !== '/' && file_exists($fullPath) && !is_dir($fullPath)) {
    return false;
}

// Si existe la versión con .php, servirla (soportando barra final)
$cleanPath = rtrim($path, '/');
if ($cleanPath !== '' && file_exists(__DIR__ . $cleanPath . '.php')) {
    require __DIR__ . $cleanPath . '.php';
    return true;
}

// Portada
if ($path === '/' || $path === '') {
    require __DIR__ . '/index.php';
    return true;
}

// Fallback 404
require __DIR__ . '/404.php';
return true;
