<?php
/**
* Language file for auth error messages
*
*/

return array(

    'account_already_exists' => 'Ya existe una cuenta con este email.',
    'account_not_found'      => 'Nombre de Usuario o contraseña incorrectas.',
    'account_not_activated'  => 'Esta cuenta no a sido activada.',
    'account_suspended'      => 'La cuenta fué suspendida por muchos intentos de ingresar. Pruebe después de [:delay] segundos',
    'account_banned'         => 'This user account is banned.',

    'signin' => array(
        'error'   => 'Hubo un problema durante el ingreso, intente nuevamente.',
        'success' => 'Ha entrado correctamente.',
    ),

    'login' => array(
        'error'   => 'Hubo un problema cuando intentaba entrar, intente nuevamente.',
        'success' => 'Ha entrado correctamente.',
    ),

    'signup' => array(
        'error'   => 'Hubo un problema al crear su cuenta, intente nuevamente.',
        'success' => 'Cuenta creada correctamente.',
    ),

        'forgot-password' => array(
            'error'   => 'Hubo un problema al recuperar su código de reseteo de contraseña, intente nuevamente.',
            'success' => 'El correo de recuperación de contrasela fué enviado correctamente.',
        ),

        'forgot-password-confirm' => array(
            'error'   => 'Hubo un problema al resetear su contraseña, intente nuevamente.',
            'success' => 'Su contraseña se ha reseteado correctamentte.',
        ),

    'activate' => array(
        'error'   => 'Hubo un problema al activar su cuenta, intente nuevamente.',
        'success' => 'Su cuenta se a activado correctamente.',
    ),

    'contact' => array(
        'error'   => 'Hubo un problema al enviar su formulario de contacto, intente nuevamente.',
        'success' => 'Sus datos de contacto fueron enviados correctamente. ',
    ),
);
