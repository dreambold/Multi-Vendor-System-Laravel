<?php
/**
* Language file for auth error messages
*
*/

return array(

    'account_already_exists' => 'Un compte avec cette adresse email existe déja.',
    'account_not_found'      => "Le nom d'utilisateur ou le mot passe est incorrect.",
    'account_not_activated'  => "Ce compte d'utilisateur n'est pas activé.",
    'account_suspended'      => "Compte utilisateur suspendu à cause d'un trop grand nombre de tentatives de connexion. Essayer à nouveau après [:delay] secondes",
    'account_banned'         => 'Ce compte utilisateur est banni.',

    'signin' => array(
        'error'   => "Il y a eu un problème pendant l'authentification, merci de réessayer.",
        'success' => 'Vous avez bien été authentifié.',
    ),

    'signup' => array(
        'error'   => "Il y a eu un problème à la création de votre compte, merci de réessayer.",
        'success' => 'Compte crée avec succès.',
    ),

        'forgot-password' => array(
            'error'   => "Il y a eu un problème à la récupération de votre mot de passe, merci de réessayer.",
            'success' => 'Email de récupération de mot de passe bien envoyé.',
        ),

        'forgot-password-confirm' => array(
            'error'   => "Il y a eu un problème pour le changement de votre mot de passe, merci de réessayer.",
            'success' => 'Votre mot de passe a bien été changé.',
        ),

    'activate' => array(
        'error'   => "Il y a eu un problème lors de l'activation de votre compte, merci de réessayer.",
        'success' => 'Votre compte a bien été activé.',
    ),

);
