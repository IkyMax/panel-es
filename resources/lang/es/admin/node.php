<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'El FQDN o la dirección IP proporcionada no se resuelve en una dirección IP válida.',
        'fqdn_required_for_ssl' => 'Se requiere un nombre de dominio completo que se resuelva en una dirección IP pública para usar SSL para este nodo.',
    ],
    'notices' => [
        'allocations_added' => 'Las asignaciones se agregaron con éxito a este nodo.',
        'node_deleted' => 'El nodo se eliminó correctamente del panel.',
        'location_required' => 'Debe tener al menos una ubicación configurada antes de poder agregar un nodo a este panel.',
        'node_created' => 'Nuevo nodo creado con éxito. Puede configurar automáticamente el daemon en esta máquina visitando la pestaña \'Configuration\'. <strong>Antes de que pueda agregar cualquier servidor, primero debe asignar al menos una dirección IP y un puerto.</strong>',
        'node_updated' => 'La información del nodo ha sido actualizada. Si se cambió alguna configuración del daemon, deberá reiniciarlo para que los cambios surtan efecto.',
        'unallocated_deleted' => 'Eliminados todos los puertos no asignados para <code>:ip</code>.',
    ],
];
