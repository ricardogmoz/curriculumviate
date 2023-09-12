<?php
// Verificar el captcha
$secretKey = "TU_SECRET_KEY"; // Reemplaza con tu clave secreta (secret key)
$response = $_POST['h-captcha-response'];

$verifyUrl = "https://hcaptcha.com/siteverify";
$data = [
    'secret' => $secretKey,
    'response' => $response
];

$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($verifyUrl, false, $context);
$responseData = json_decode($result);

if ($responseData->success) {
    // El captcha se ha verificado correctamente, puedes realizar acciones adicionales aquí
    // Por ejemplo, guardar datos en una base de datos o enviar un correo electrónico
    echo "Captcha válido. Procesamiento exitoso.";
} else {
    // El captcha no se ha verificado correctamente, muestra un mensaje de error
    echo "Captcha no válido. Vuelve a intentarlo.";
}
?>
