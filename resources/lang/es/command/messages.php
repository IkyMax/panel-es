<?php

return [
    'location' => [
        'no_location_found' => 'No se pudo localizar un registro que coincida con el código corto provisto.',
        'ask_short' => 'Código corto de ubicación',
        'ask_long' => 'Descripción de la ubicación',
        'created' => 'Se creó con éxito una nueva ubicación (:name) con una ID de :id.',
        'deleted' => 'liminó con éxito la ubicación solicitada.',
    ],
    'user' => [
        'search_users' => 'Ingrese un nombre de usuario, ID de usuario o dirección de correo electrónico',
        'select_search_user' => 'ID del usuario a eliminar (Ingrese \'0\' para volver a buscar)',
        'deleted' => 'Usuario eliminado con éxito del Panel.',
        'confirm_delete' => '¿Está seguro de que desea eliminar este usuario del Panel?',
        'no_users_found' => 'No se encontraron usuarios para el término de búsqueda proporcionado.',
        'multiple_found' => 'Se encontraron varias cuentas para el usuario proporcionado, no se pudo eliminar un usuario debido a la marca --no-interaction.',
        'ask_admin' => '¿Es este usuario un administrador?',
        'ask_email' => 'Dirección de correo electrónico',
        'ask_username' => 'Nombre de usuario',
        'ask_name_first' => 'Nombre',
        'ask_name_last' => 'Apellido',
        'ask_password' => 'Contraseña',
        'ask_password_tip' => 'Si desea crear una cuenta con una contraseña aleatoria enviada por correo electrónico al usuario, vuelva a ejecutar este comando (CTRL+C) y pase el indicador `--no-password`.',
        'ask_password_help' => 'Las contraseñas deben tener al menos 8 caracteres y contener al menos una letra mayúscula y un número.',
        '2fa_help_text' => [
            'Este comando deshabilitará la autenticación de 2 factores para la cuenta de un usuario si está habilitada. Esto solo debe usarse como un comando de recuperación de cuenta si el usuario no puede acceder a su cuenta.',
            'Si esto no es lo que quería hacer, presione CTRL+C para salir de este proceso.',
        ],
        '2fa_disabled' => 'La autenticación de 2 factores ha sido deshabilitada para :email.',
    ],
    'schedule' => [
        'output_line' => 'Enviando trabajo para la primera tarea en `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Eliminando el archivo de respaldo del servicio :file.',
    ],
    'server' => [
        'rebuild_failed' => 'La solicitud de reconstrucción para ":name" (#:id) en el nodo ":node" falló con el error: :message',
        'reinstall' => [
            'failed' => 'Solicitud de reinstalación para ":name" (#:id) en el nodo ":node" falló con error: :message',
            'confirm' => 'Está a punto de reinstalar contra un grupo de servidores. ¿Desea continuar?',
        ],
        'power' => [
            'confirm' => 'Está a punto de realizar una :action en contra :count servidores. ¿Desea continuar?',
            'action_failed' => 'La solicitud de encendido para ":name" (#:id) en el nodo ":node" falló con el error: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Host SMTP (por ejemplo, smtp.gmail.com)',
            'ask_smtp_port' => 'Puerto SMTP',
            'ask_smtp_username' => 'Nombre de usuario SMTP',
            'ask_smtp_password' => 'Contraseña de SMTP',
            'ask_mailgun_domain' => 'Dominio Mailgun',
            'ask_mailgun_endpoint' => 'Punto final de Mailgun',
            'ask_mailgun_secret' => 'Mailgun Secreto',
            'ask_mandrill_secret' => 'Mandrill Secreto',
            'ask_postmark_username' => 'Clave API de Postmark',
            'ask_driver' => '¿Qué controlador debería usarse para enviar correos electrónicos?',
            'ask_mail_from' => 'Dirección de correo electrónico de la que deben originarse los correos electrónicos',
            'ask_mail_name' => 'Nombre del que deben aparecer los correos electrónicos',
            'ask_encryption' => 'Método de encriptación a usar',
        ],
    ],
];
