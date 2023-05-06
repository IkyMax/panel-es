<?php

return [
    'sign_in' => 'Iniciar sesión',
    'go_to_login' => 'Ir a inicio de sesión',
    'failed' => 'No se pudo encontrar ninguna cuenta que coincida con esas credenciales.',

    'forgot_password' => [
        'label' => '¿Olvidaste la contraseña?',
        'label_help' => 'Ingrese la dirección de correo electrónico de su cuenta para recibir instrucciones sobre cómo restablecer su contraseña.',
        'button' => 'Recuperar cuenta',
    ],

    'reset_password' => [
        'button' => 'Restablecer e iniciar sesión',
    ],

    'two_factor' => [
        'label' => 'Token de 2 factores',
        'label_help' => 'Esta cuenta requiere una segunda capa de autenticación para poder continuar. Ingrese el código generado por su dispositivo para completar este inicio de sesión.',
        'checkpoint_failed' => 'El token de autenticación de dos factores no es válido.',
    ],

    'throttle' => 'Demasiados intentos de inicio de sesión. Vuelva a intentarlo en :seconds segundos.',
    'password_requirements' => 'La contraseña debe tener al menos 8 caracteres y debe ser única para este sitio.',
    '2fa_must_be_enabled' => 'El administrador ha requerido que la Autenticación de 2 factores esté habilitada para su cuenta para usar el Panel.',
];
