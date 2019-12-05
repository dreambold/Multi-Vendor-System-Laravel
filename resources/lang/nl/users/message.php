<?php
/**
* Language file for user error/success messages
*
*/

return array(

    'user_exists'              => 'Gebruiker bestaat al!',
    'user_not_found'           => 'Gebruiker [:id] bestaat niet.',
    'user_login_required'      => 'Het login veld is verplicht',
    'user_password_required'   => 'Het wachtwoord is verplicht.',
    'insufficient_permissions' => 'Onvoldoende machtigingen.',
    'banned'              => 'verbannen',
    'suspended'             => 'geschorst',

    'success' => array(
        'create'    => 'Gebruiker is succesvol gemaakt.',
        'update'    => 'Gebruiker is succesvol geüpdatet.',
        'delete'    => 'Gebruiker is succesvol verwijderd.',
        'ban'       => 'Gebruiker is succesvol verbannen.',
        'unban'     => 'Gebruiker is succesvol weer toegestaan.',
        'suspend'   => 'Gebruiker is succesvol geschorst.',
        'unsuspend' => 'Gebruiker is succesvol geactiveerd.',
        'restored'  => 'Gebruiker is succesvol hersteld.'
    ),

    'error' => array(
        'create'    => 'Er is een fout opgetreden tijdens het maken van de gebruiker. Probeer het nogmaals.',
        'update'    => 'Er is een fout opgetreden tijdens het updaten van de gebruiker. Probeer het nogmaals.',
        'delete'    => 'Er is een fout opgetreden tijdens het verwijderen van de gebruiker. Probeer het nogmaals.',
        'unsuspend' => 'Er is een fout opgetreden tijdens het schorsen van de gebruiker. Probeer het nogmaals.'
    ),

);
