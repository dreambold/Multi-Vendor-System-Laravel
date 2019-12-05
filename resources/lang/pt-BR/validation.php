<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'O :attribute precisa ser aceito.',
    'active_url'           => 'O :attribute não é uma URL valida.',
    'after'                => 'O :attribute precisa ser uma data posterior a :date.',
    'alpha'                => 'O :attribute deve ter somente letras.',
    'alpha_dash'           => 'O :attribute deve ter somente letras, números e hifens.',
    'alpha_num'            => 'O :attribute deve ter somente letras e números.',
    'array'                => 'O :attribute deve ser um vetor.',
    'before'               => 'O :attribute deve ser uma data anterior a :date.',
    'between'              => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file'    => 'O :attribute preicsa ter entre :min e :max kilobytes.',
        'string'  => 'O :attribute precisa ter entre :min e :max caracteres.',
        'array'   => 'O :attribute deve ser um vetor e ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'O :attribute confirmação não é igual.',
    'date'                 => 'O :attribute não é uma data válida.',
    'date_format'          => 'O :attribute não atende o formato que deve ser :format.',
    'different'            => 'O :attribute e :other devem ser diferentes.',
    'digits'               => 'O :attribute precisa ter :digits casas decimais.',
    'digits_between'       => 'O :attribute ter entre :min e :max casas decimais.',
    'email'                => 'O :attribute deve ser um endereço de email válido.',
    'filled'               => 'O campo :attribute é obrigatório.',
    'exists'               => 'O :attribute selecionado é inválido.',
    'image'                => 'O :attribute deve ser uma imagem.',
    'in'                   => 'O :attribute selecionado é inválido.',
    'integer'              => 'O :attribute deve ser um inteiro.',
    'ip'                   => 'O :attribute deve ser um endereço de IP válido.',
    'max'                  => [
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'file'    => 'O :attribute não pode ser maior que :max kilobytes.',
        'string'  => 'O :attribute não pode ter mais que :max caracteres.',
        'array'   => 'O :attribute não pode ter mais que :max itens.',
    ],
    'mimes'                => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O :attribute deve ter no mínimo :min.',
        'file'    => 'O :attribute deve ter no mínimo :min kilobytes.',
        'string'  => 'O :attribute deve ter no mínimo :min caracteres.',
        'array'   => 'O :attribute deve ter no mínimo :min itens.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => 'O :attribute deve ser um número.',
    'regex'                => 'O formato de :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não estão presentes.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'same'                 => 'O :attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'O :attribute deve ter tamanho de :size.',
        'file'    => 'O :attribute deve ter o tamanho de :size kilobytes.',
        'string'  => 'O :attribute deve ter :size caracteres.',
        'array'   => 'O :attribute deve ter :size itens.',
    ],
    'timezone'             => 'O :attribute deve ser uma zona válida.',
    'unique'               => 'O :attribute já está sendo utilizado.',
    'url'                  => 'O formato de :attribute é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [],

];

