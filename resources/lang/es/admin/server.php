<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Está intentando eliminar la asignación predeterminada para este servidor, pero no hay una asignación alternativa para usar.',
        'marked_as_failed' => 'Este servidor se marcó como fallido en una instalación anterior. El estado actual no se puede alternar en este estado.',
        'bad_variable' => 'Hubo un error de validación con la variable :name .',
        'daemon_exception' => 'Hubo una excepción al intentar comunicarse con el daemon que resultó en un código de respuesta HTTP/:code. Esta excepción ha sido registrada. (ID de solicitud: :request_id)',
        'default_allocation_not_found' => 'La asignación predeterminada solicitada no se encontró en las asignaciones de este servidor.',
    ],
    'alerts' => [
        'startup_changed' => 'La configuración de inicio de este servidor ha sido actualizada. Si se cambió el nido o el huevo de este servidor, se realizará una reinstalación ahora.',
        'server_deleted' => 'El servidor se eliminó correctamente del sistema.',
        'server_created' => 'El servidor se creó correctamente en el panel. Espere unos minutos para que el daemon instale completamente este servidor.',
        'build_updated' => 'Se han actualizado los detalles de compilación de este servidor. Algunos cambios pueden requerir un reinicio para que surtan efecto.',
        'suspension_toggled' => 'El estado de suspensión del servidor ha cambiado a :status.',
        'rebuild_on_boot' => 'Este servidor se ha marcado como que requiere una reconstrucción del contenedor Docker. Esto sucederá la próxima vez que se inicie el servidor.',
        'install_toggled' => 'El estado de instalación de este servidor ha cambiado.',
        'server_reinstalled' => 'Este servidor ha sido puesto en cola para una reinstalación a partir de ahora.',
        'details_updated' => 'Los detalles del servidor se han actualizado correctamente.',
        'docker_image_updated' => 'Cambió con éxito la imagen predeterminada de Docker para usar en este servidor. Es necesario reiniciar para aplicar este cambio.',
        'node_required' => 'Debe tener al menos un nodo configurado antes de poder agregar un servidor a este panel.',
        'transfer_nodes_required' => 'Debe tener al menos dos nodos configurados antes de poder transferir servidores.',
        'transfer_started' => 'Se ha iniciado la transferencia del servidor.',
        'transfer_not_viable' => 'El nodo que seleccionó no tiene el espacio en disco requerido o la memoria disponible para acomodar este servidor.',
    ],
];
