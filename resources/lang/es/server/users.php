<?php

return [
    'permissions' => [
        'websocket_*' => 'Permite el acceso al websocket para este servidor.',
        'control_console' => 'Permite al usuario enviar datos a la consola del servidor.',
        'control_start' => 'Permite al usuario iniciar la instancia del servidor.',
        'control_stop' => 'Permite al usuario detener la instancia del servidor.',
        'control_restart' => 'Permite al usuario reiniciar la instancia del servidor.',
        'control_kill' => 'Permite al usuario matar el proceso de la instancia del servidor.',
        'user_create' => 'Permite al usuario crear nuevas cuentas de usuario para el servidor.',
        'user_read' => 'Otorga permiso al usuario para ver los usuarios asociados con este servidor.',
        'user_update' => 'Permite al usuario modificar otros usuarios asociados con este servidor.',
        'user_delete' => 'Permite al usuario eliminar otros usuarios asociados con este servidor.',
        'file_create' => 'Otorga permiso al usuario para crear nuevos archivos y directorios.',
        'file_read' => 'Permite al usuario ver archivos y carpetas asociados con esta instancia de servidor, así como ver su contenido.',
        'file_update' => 'Permite al usuario actualizar archivos y carpetas asociados con el servidor.',
        'file_delete' => 'Permite al usuario eliminar archivos y directorios.',
        'file_archive' => 'Permite al usuario crear archivados y descomprimir archivados existentes.',
        'file_sftp' => 'Permite al usuario realizar las acciones de archivos anteriores utilizando un cliente SFTP.',
        'allocation_read' => 'Permite el acceso a las páginas de gestión de asignación del servidor.',
        'allocation_update' => 'Otorga permiso al usuario para realizar modificaciones en las asignaciones del servidor.',
        'database_create' => 'Otorga permiso al usuario para crear una nueva base de datos para el servidor.',
        'database_read' => 'Otorga permiso al usuario para ver las bases de datos del servidor.',
        'database_update' => 'Otorga permiso a un usuario para realizar modificaciones en una base de datos. Si el usuario no tiene el permiso "Ver contraseña", tampoco podrá modificar la contraseña.',
        'database_delete' => 'Otorga permiso a un usuario para eliminar una instancia de base de datos.',
        'database_view_password' => 'Otorga permiso a un usuario para ver una contraseña de base de datos en el sistema.',
        'schedule_create' => 'Permite a un usuario crear un nuevo horario para el servidor.',
        'schedule_read' => 'Otorga permiso a un usuario para ver los horarios de un servidor.',
        'schedule_update' => 'Otorga permiso a un usuario para realizar modificaciones en un horario de servidor existente.',
        'schedule_delete' => 'Permite a un usuario eliminar un horario para el servidor.',
    ],
];
