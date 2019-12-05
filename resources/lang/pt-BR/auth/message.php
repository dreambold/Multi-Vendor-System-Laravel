<?php
/**
* Language file for auth error messages
*
*/

return array(

    'account_already_exists' => 'Uma conta com esse email já existe.',
    'account_not_found'      => 'Usuário ou senha incorretos.',
    'account_not_activated'  => 'Essa conta de usuário não está ativada.',
    'account_suspended'      => 'Conta de usuário suspensa devido a muitas tentativas de login. Tente novamente em [:delay] segundos',
    'account_banned'         => 'Essa conta de usuaŕio está banida.',

    'signin' => array(
        'error'   => 'Houve um problema ao efetuar o login, por favor, tente novamente.',
        'success' => 'Você entrou com sucesso.',
    ),

    'signup' => array(
        'error'   => 'Houve um problema ao criar sua conta, por favor, tente novamente.',
        'success' => 'Conta criada com sucesso.',
    ),

        'forgot-password' => array(
            'error'   => 'Houve um problema ao gerar o código para resetar a senha, por favor, tente novamente.',
            'success' => 'E-mail de recuperação de senha enviado com sucesso.',
        ),

        'forgot-password-confirm' => array(
            'error'   => 'Houve um problema ao reinicializar a senha, por favor, tente novamente.',
            'success' => 'Sua senha foi reinicializada com sucesso.',
        ),

    'activate' => array(
        'error'   => 'Houve um problema ao ativar sua conta, por favor, tente novamente.',
        'success' => 'Sua conta foi ativada com sucesso.',
    ),

);
