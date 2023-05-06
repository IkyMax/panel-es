<?php

return [
    'email' => [
        'title' => 'Actualiza tu correo electrónico',
        'updated' => 'Su dirección de correo electrónico ha sido actualizada.',
    ],
    'password' => [
        'title' => 'Cambiar tu contraseña',
        'requirements' => 'Tu nueva contraseña debe tener al menos 8 caracteres de longitud.',
        'updated' => 'Tu contraseña ha sido actualizada.',
    ],
    'two_factor' => [
        'button' => 'Configurar autenticación de 2 factores',
        'disabled' => 'La autenticación de dos factores ha sido deshabilitada en su cuenta. Ya no se le pedirá que proporcione un token al iniciar sesión.',
        'enabled' => '¡La autenticación de dos factores ha sido habilitada en su cuenta! A partir de ahora, al iniciar sesión, se le pedirá que proporcione el código generado por su dispositivo.',
        'invalid' => 'El token proporcionado no es válido.',
        'setup' => [
            'title' => 'Configurar autenticación de dos factores',
            'help' => '¿No puedes escanear el código? Introduce el siguiente código en tu aplicación:',
            'field' => 'Ingresar token',
        ],
        'disable' => [
            'title' => 'Deshabilitar autenticación de dos factores',
            'field' => 'Ingresar token',
        ],
    ],
];
