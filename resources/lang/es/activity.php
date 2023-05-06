<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Inicio de sesión fallido',
        'success' => 'Sesión iniciada',
        'password-reset' => 'Restablecer contraseña',
        'reset-password' => 'Restablecimiento de contraseña solicitado',
        'checkpoint' => 'Autenticación de dos factores solicitada',
        'recovery-token' => 'Has usado un Token de recuperación de dos factores',
        'token' => 'Desafío de dos factores resuelto',
        'ip-blocked' => 'Solicitud bloqueada de dirección IP no listada para :identifier',
        'sftp' => [
            'fail' => 'Inicio de sesión SFTP fallido',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Email cambiado de :old a :new',
            'password-changed' => 'Contraseña cambiada',
        ],
        'api-key' => [
            'create' => 'Se ha creado la nueva clave de API :identifier',
            'delete' => 'Se ha borrado la clave de API :identifier',
        ],
        'ssh-key' => [
            'create' => 'Se ha añadido la clave SSH :fingerprint a la cuenta',
            'delete' => 'Se ha borrado la clave SSH :fingerprint de la cuenta',
        ],
        'two-factor' => [
            'create' => 'Autenticación de dos factores habilitada',
            'delete' => 'Autenticación de dos factores deshabilitada',
        ],
    ],
    'server' => [
        'reinstall' => 'Servidor reinstalado',
        'console' => [
            'command' => 'Se ha ejecutado ":command" en el servidor',
        ],
        'power' => [
            'start' => 'Servidor iniciado',
            'stop' => 'Servidor detenido',
            'restart' => 'Servidor reiniciado',
            'kill' => 'se ha matado el proceso del servidor',
        ],
        'backup' => [
            'download' => 'Se ha descargado el respaldo :name',
            'delete' => 'Se ha borrado el respaldo :name',
            'restore' => 'Se ha restaurado el respaldo :name (archivos borrados: :truncate)',
            'restore-complete' => 'Se ha completado la restauración del respaldo :name',
            'restore-failed' => 'Fallo en la restauración del respaldo :name',
            'start' => 'Creado el respaldo :name',
            'complete' => 'Se ha marcado el respaldo :name como completo',
            'fail' => 'Se ha marcado el respaldo :name como fallido',
            'lock' => 'Se ha bloqueado el respaldo :name',
            'unlock' => 'Se ha desbloqueado el respaldo :name',
        ],
        'database' => [
            'create' => 'Se ha creado la base de datos :name',
            'rotate-password' => 'Contraseña rotada para la base de datos :name',
            'delete' => 'Se ha borrado la base de datos :name',
        ],
        'file' => [
            'compress_one' => 'Se ha comprimido :directory:file',
            'compress_other' => 'Se han comprimido :count archivos en :directory',
            'read' => 'Viendo los contenidos de :file',
            'copy' => 'Copia de :file creada',
            'create-directory' => 'Se ha creado el directorio :directory:name',
            'decompress' => 'Se ha descomprimido :files en :directory',
            'delete_one' => 'Se ha borrado :directory:files.0',
            'delete_other' => 'Se han borrado :count archivos en :directory',
            'download' => 'Se ha descagado :file',
            'pull' => 'Se ha descargado un archivo remoto de :url a :directory',
            'rename_one' => 'Se ha renombrado :directory:files.0.from a :directory:files.0.to',
            'rename_other' => 'Se han renombrado :count archivos en :directory',
            'write' => 'Se ha escrito nuevo contenido en :file',
            'upload' => 'Iniciada la carga del archivo',
            'uploaded' => 'Se ha cargado :directory:file',
        ],
        'sftp' => [
            'denied' => 'Se ha bloqueado el acceso a SFTP por permisos',
            'create_one' => 'Se ha creado :files.0',
            'create_other' => 'Se han creado :count archivos nuevos',
            'write_one' => 'Se han modificado los contenidos de :files.0',
            'write_other' => 'Se han modificado los contenidos de :count archivos',
            'delete_one' => 'Se ha borrado :files.0',
            'delete_other' => 'Se han borrado :count archivos',
            'create-directory_one' => 'Se ha creado el directorio :files.0',
            'create-directory_other' => 'Se han creado :count directorios',
            'rename_one' => 'Se ha renombrado :files.0.from a :files.0.to',
            'rename_other' => 'Se han renombrado o movido :count archivos',
        ],
        'allocation' => [
            'create' => 'Se ha agregado :allocation al servidor',
            'notes' => 'Se han actualizado las notas de :allocation de ":old" a ":new"',
            'primary' => 'se ha asignado :allocation como la asignación principal del servidor',
            'delete' => 'Se ha borrado la asignación :allocation',
        ],
        'schedule' => [
            'create' => 'Se ha creado el horario :name',
            'update' => 'Se ha actualizado el horario :name',
            'execute' => 'Se ha ejecutado manualmente el horario :name',
            'delete' => 'Se ha borrado el horario :name',
        ],
        'task' => [
            'create' => 'Se ha creado la nueva tarea ":action" para el horario :name',
            'update' => 'Se ha actualizado la nueva tarea ":action" para el horario :name',
            'delete' => 'Se ha borraado una tarea del horario :name',
        ],
        'settings' => [
            'rename' => 'Se ha renombrado el servidor de :old a :new',
            'description' => 'Se ha cambiado la descripción del servidor de :old a :new',
        ],
        'startup' => [
            'edit' => 'Se ha cambiado la variable :variable de ":old" a ":new"',
            'image' => 'Se ha actualizado el contenedor del Docker de :old a :new',
        ],
        'subuser' => [
            'create' => 'Se ha añadido :email como un subusuario',
            'update' => 'Se ghan actualizado los permisos de subusuario para :email',
            'delete' => 'Se ha removido :email como un subusuario',
        ],
    ],
];
