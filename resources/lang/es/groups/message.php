<?php
/**
* Language file for group error/success messages
*
*/

return array(

    'group_exists'        => 'El grupo ya existe!',
    'group_not_found'     => 'El grupo [:id] no existe.',
    'group_name_required' => 'El campo nombre es requerido',
    'users_exists'        => 'El grupo contiene usuarios, no puede ser borrado',

    'success' => array(
        'create' => 'El grupo fué creado correctamente.',
        'update' => 'El grupo fué actualizado correctamente.',
        'delete' => 'El grupo fué borrado correctamente.',
    ),

    'delete' => array(
        'create' => 'Hubo un problema al crear el grupo. Intente nuevamente',
        'update' => 'Hubo un problema al actualizar el grupo. Intente nuevamente',
        'delete' => 'Hubo un problema al borrar el grupo. Intente nuevamente',
    ),

    'error' => array(
        'group_exists' => 'Ya hay un grupo con ese nombre, los nombres de grupo deben ser únicos.',
    ),

);
