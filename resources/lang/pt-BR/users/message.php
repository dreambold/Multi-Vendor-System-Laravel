<?php
/**
* Language file for user error/success messages
*
*/

return array(

    'user_exists'              => 'OUsuário já existe!',
    'user_not_found'           => 'O uduário [:id] não existe.',
    'user_login_required'      => 'O campo login é obrigatório',
    'user_password_required'   => 'A senha é obrigatória.',
    'insufficient_permissions' => 'Permissões Insuficientes.',
    'banned'              => 'banido',
    'suspended'             => 'suspenso',

    'success' => array(
        'create'    => 'Usuário criado com sucesso.',
        'update'    => 'Usuário atualizado com sucesso.',
        'delete'    => 'Usuário apagado com sucesso.',
        'ban'       => 'Usuário banido com sucesso.',
        'unban'     => 'Usuário desbanido com sucesso.',
        'suspend'   => 'Usuário suspenso com sucesso.',
        'unsuspend' => 'Usuário dessuspenso com sucesso.',
        'restored'  => 'Usuário restaurado com sucesso.'
    ),

    'error' => array(
        'create'    => 'Ocorreu um erro ao criar o Usuário. Por favor, tente novamente.',
        'update'    => 'Ocorreu um erro ao atualizar o Usuário. Por favor, tente novamente.',
        'delete'    => 'Ocorreu um erro ao apagar o Usuário. Por favor, tente novamente.',
        'unsuspend' => 'Ocorreu um erro ao desbanir o Usuário. Por favor, tente novamente.'
    ),

);
