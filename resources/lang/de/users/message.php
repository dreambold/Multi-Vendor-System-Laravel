<?php
/**
* Language file for user error/success messages
*
*/

return array(

    'user_exists'              => 'Benutzer existiert bereits!',
    'user_not_found'           => 'Benutzer [:id] ist nicht vorhanden.',
    'user_login_required'      => 'Login-Feld wird benötigt',
    'user_password_required'   => 'Passwort-Feld wird.',
    'insufficient_permissions' => 'Unzureichende Berechtigungen.',
    'banned'              => 'Gesperrt',
    'suspended'             => 'Suspendiert',

    'success' => array(
        'create'    => 'Benutzer wurde erfolgreich erstellt.',
        'update'    => 'Benutzer wurde erfolgreich aktualisiert.',
        'delete'    => 'Benutzer wurde erfolgreich gelöscht.',
        'ban'       => 'Benutzer wurde erfolgreich gesperrt.',
        'unban'     => 'Benutzer wurde erfolgreich entsperrt.',
        'suspend'   => 'Benutzer wurde erfolgreich suspendet.',
        'unsuspend' => 'Benutzer wurde erfolgreich unsuspended.',
        'restored'  => 'Benutzer wurde erfolgreich wiederhergestellt.'
    ),

    'error' => array(
        'create'    => 'Es gab ein Problem beim Erstellen des Benutzers. Bitte versuchen Sie es noch einmal.',
        'update'    => 'Es gab ein Problem beim Aktualisieren des Benutzers. Bitte versuchen Sie es noch einmal.',
        'delete'    => 'Es gab ein Problem beim Löschen des Benutzers. Bitte versuchen Sie es nocheinmal.',
        'unsuspend' => 'Es gab ein Problem beim Unsuspending des Benutzers. Bitte versuchen Sie es nocheinmal.'
    ),

);
