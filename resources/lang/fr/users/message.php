<?php
/**
* Language file for user error/success messages
*
*/

return array(

    'user_exists'              => 'Utilisateur déja existant!',
    'user_not_found'           => "L'utilisateur [:id] n'existe pas.",
    'user_login_required'      => 'Le champ identifiant est requis',
    'user_password_required'   => 'Un mot de passe est requis.',
    'insufficient_permissions' => 'Permissions insuffisantes.',
    'banned'              => 'bannis',
    'suspended'             => 'suspendu',

    'success' => array(
        'create'    => "L'utilisateur a bien été crée.",
        'update'    => "L'utilisateur a bien été mis à jour.",
        'delete'    => "L'utilisateur a bien été supprimé.",
        'ban'       => "L'utilisateur a bien été banni.",
        'unban'     => "L'utilisateur a bien été rétabli.",
        'suspend'   => "L'utilisateur a bien été suspendu.",
        'unsuspend' => "L'utilisateur a bien été rétabli.",
        'restored'  => "L'utilisateur a bien été restauré."
    ),

    'error' => array(
        'create'    => "Il y a eu un problème lors de la création de l'utilisateur. Merci de réessayer.",
        'update'    => "Il y a eu un problème lors de la mise à jour de l'utilisateur. Merci de réessayer.",
        'delete'    => "Il y a eu un problème lors de la suppression de l'utilisateur. Merci de réessayer.",
        'unsuspend' => "Il y a eu un problème lors du rétablissement de l'utilisateur. Merci de réessayer."
    ),

);
