<?php
/**
* Language file for user error/success messages
*
*/

return array(

    'user_exists'              => 'El Usuario ya existe!',
    'user_not_found'           => 'El Usuario [:id] no existe.',
    'user_login_required'      => 'El campo usuario es requerido',
    'user_password_required'   => 'El campo contraseña es requerido.',
    'insufficient_permissions' => 'Permisos insuficientes.',
    'banned'              => 'prohibido',
    'suspended'             => 'suspendido',

    'success' => array(
        'create'    => 'El usuario fue correctamente creado.',
        'update'    => 'El usuario fue correctamente actualiado.',
        'delete'    => 'El usuario fue correctamente borrado.',
        'ban'       => 'El usuario fue correctamente prohibido.',
        'unban'     => 'El usuario fue correctamente rehabilitada.',
        'suspend'   => 'El usuario fue correctamente suspendido.',
        'unsuspend' => 'El usuario fue correctamente rehabilitada.',
        'restored'  => 'El usuario fue correctamente recuperada.'
    ),

    'error' => array(
        'create'    => 'Hubo un problema creando el usuario. Intente nuevamente',
        'update'    => 'Hubo un problema actualizando el usuario. Intente nuevamente.',
        'delete'    => 'Hubo un problema borrando el usuario. Intente nuevamente.',
        'unsuspend' => 'Hubo un problema suspendiendo el usuario. Intente nuevamente.'
    ),

);
