<?php
/**
 * Language file for item error/success messages
 *
 */

return array(

    'exists'        => 'Élément déja éxistant!',
    '_not_found'     => "Élément [:id] n'existe pas.",
    '_name_required' => 'Le champ nom est requis',

    'success' => array(
        'create' => "L'élément a bien été crée.",
        'update' => "L'élément a bien été mis à jour.",
        'delete' => "L'élément a bien été supprimé.",
    ),

    'delete' => array(
        'create' => 'Il y a eu une erreur dans la création de cet élément. Merci de réessayer.',
        'update' => 'Il y a eu une erreur dans la mise à jour de cet élément. Merci de réessayer.',
        'delete' => 'Il y a eu une erreur dans la suppression de cet élément. Merci de réessayer.',
    ),

    'error' => array(
        'item_exists' => 'Un élément avec un nom similaire éxiste déja, les noms doivent être uniques pour les éléments.',
    ),

);
