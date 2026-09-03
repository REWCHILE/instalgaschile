<?php
/**
 * Script de Auto-Despliegue (Git Webhook) para HestiaCP
 * Permite actualizar automáticamente el sitio web en el servidor al hacer push en GitHub.
 * 
 * Uso vía Webhook de GitHub:
 * Payload URL: https://instalgaschile.cl/deploy.php?secret=instalgas_secret_2026
 * Content type: application/json
 * Secret: instalgas_secret_2026
 */

// Token secreto de seguridad
define('DEPLOY_SECRET', 'instalgas_secret_2026');

// Validar autorización
$authorized = false;
$incoming_secret = $_GET['secret'] ?? '';

if (!empty($incoming_secret) && hash_equals(DEPLOY_SECRET, $incoming_secret)) {
    $authorized = true;
} else {
    // Validar firma HMAC de GitHub Webhook
    $signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
    $payload = file_get_contents('php://input');
    if (!empty($signature) && !empty($payload)) {
        $calculated = 'sha256=' . hash_hmac('sha256', $payload, DEPLOY_SECRET);
        if (hash_equals($calculated, $signature)) {
            $authorized = true;
        }
    }
}

if (!$authorized) {
    http_response_code(403);
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Acceso denegado. Secreto no valido.']);
    exit;
}

// Ejecutar pull en el directorio del proyecto
chdir(__DIR__);
$output = shell_exec('git pull origin main 2>&1');

header('Content-Type: text/plain; charset=utf-8');
echo "=== DESPLIEGUE AUTOMÁTICO INSTALGAS CHILE ===" . PHP_EOL;
echo "Fecha y Hora: " . date('Y-m-d H:i:s') . PHP_EOL;
echo "Directorio: " . __DIR__ . PHP_EOL;
echo "Salida de Git:" . PHP_EOL;
echo $output . PHP_EOL;
