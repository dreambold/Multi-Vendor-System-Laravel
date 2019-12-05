<?php
/**
* Language file for group error/success messages
*
*/

return array(

    'group_exists'        => 'Groupe déja existant!',
    'group_not_found'     => "Le groupe [:id] n'existe pas.",
    'group_name_required' => 'Le champ nom est requis',
    'users_exists'        => 'Ce groupe contient des utilisateurs, il ne peut pas être supprimé',

    'success' => array(
        'create' => 'Le groupe a bien été crée.',
        'update' => 'Le blog a bien été mis à jour.',
        'delete' => 'Le blog a bien été supprimé.',
    ),

    'delete' => array(
        'create' => 'Il y a eu un problème lors de la création du groupe. Merci de réessayer.',
        'update' => 'Il y a eu un problème lors de la mise à jour du groupe. Merci de réessayer.',
        'delete' => 'Il y a eu un problème lors de la suppréssion du groupe. Merci de réessayer.',
    ),

    'error' => array(
        'group_exists' => 'Un groupe avec ce nom existe déja, les noms doivent être uniques pour les groupes.',
    ),

);
