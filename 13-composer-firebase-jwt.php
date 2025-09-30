<?php
include 'includes/header.php';

// Requerimos el autoload generado por Composer
require 'vendor/autoload.php';

use  App\Cliente;
use  App\Detalle;

// Importamos la librería externa instalada con Composer
use \Firebase\JWT\JWT;

$detalle = new Detalle();
echo '<hr>';

$cliente = new Cliente();
echo '<hr>';


// --- EJEMPLO USANDO JWT ---

$key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];

$headers = [
    'x-forwarded-for' => 'www.google.com'
];

$jwt = JWT::encode($payload, $key, 'HS256', null, $headers);

list($headersB64, $payloadB64, $sig) = explode('.', $jwt);
$decoded = json_decode(base64_decode($headersB64), true);

print_r($decoded);


include 'includes/footer.php';
