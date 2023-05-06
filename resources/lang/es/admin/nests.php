<?php

return [
    'notices' => [
        'created' => 'Un nuevo Nido, de nombre :name, ha sido creado exitosamente.',
        'deleted' => 'Eliminó con éxito el Nido solicitado del Panel.',
        'updated' => 'Se actualizaron con éxito las opciones de configuración del Nido.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Se importó con éxito este Huevo y sus variables asociadas.',
            'updated_via_import' => 'Este Huevo ha sido actualizado usando el archivo provisto.',
            'deleted' => 'Eliminó con éxito el Huevo solicitado desde el Panel.',
            'updated' => 'La configuración del Huevo se ha actualizado correctamente.',
            'script_updated' => 'La secuencia de comandos de instalación del Huevo se ha actualizado y se ejecutará cada vez que se instalen servidores.',
            'egg_created' => 'e puso un nuevo Huevo con éxito. Deberá reiniciar todos los daemons en ejecución para aplicar este nuevo Huevo.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'La variable ":variable" ha sido eliminada y ya no estará disponible para los servidores una vez reconstruida.',
            'variable_updated' => 'La variable ":variable" ha sido actualizada. Deberá reconstruir todos los servidores que utilicen esta variable para poder aplicar los cambios.',
            'variable_created' => 'La nueva variable se ha creado y asignado correctamente a este Huevo.',
        ],
    ],
];
