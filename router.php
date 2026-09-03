<?php
/**
 * Router para el servidor integrado de PHP (php -S)
 * Permite la navegación con URLs limpias idéntica a Apache (.htaccess)
 */

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$fullPath = __DIR__ . $path;

// Si el archivo estático existe físicamente (imágenes, CSS, JS, etc.), servirlo directamente
if ($path !== '/' && file_exists($fullPath) && !is_dir($fullPath)) {
    return false;
}

// Si existe la versión con .php, servirla
if ($path !== '/' && file_exists($fullPath . '.php')) {
    require $fullPath . '.php';
    return true;
}

// Portada o fallback
require __DIR__ . '/index.php';
return true;
