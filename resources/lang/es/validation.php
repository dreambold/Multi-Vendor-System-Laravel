<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El campo following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'La dirección :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe tener una fecha posterior a :date.',
    'alpha'                => 'El campo :attribute debe contener solo letras.',
    'alpha_dash'           => 'El campo :attribute debe contener solo letras, números o guiones.',
    'alpha_num'            => 'El campo :attribute debe contener solo letras y números.',
    'array'                => 'El canpo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe tener una fecha anterior a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser entre :min y :max.',
        'file'    => 'El campo :attribute debe ser entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe ser entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe tener entre :min y :max registros.',
    ],
    'boolean'              => 'El campo campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'La confirmación de :attribute no coincide.',
    'date'                 => 'El campo :attribute no es una fecha válida.',
    'date_format'          => 'El campo :attribute no coincide con el formato :format.',
    'different'            => 'El campo :attribute y el campo :other deben ser diferentes.',
    'digits'               => 'El campo :attribute debe tener :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe tener entre :min y :max dígitos.',
    'email'                => 'El campo :attribute debe ser una dirección de email válida.',
    'filled'               => 'El campo :attribute es requerido.',
    'exists'               => 'El campo seleccionado :attribute es inválido.',
    'image'                => 'El campo :attribute debe ser una imágen.',
    'in'                   => 'El campo seleccionado :attribute es inválido.',
    'integer'              => 'El campo :attribute debe ser un entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'max'                  => [
        'numeric' => 'El campo :attribute no puede ser mas grande que  :max.',
        'file'    => 'El campo :attribute no puede ser mas grande que :max kilobytes.',
        'string'  => 'El campo :attribute no puede ser mas grande que :max caracteres.',
        'array'   => 'El campo :attribute no puede tener mas de :max registros.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo del tipo: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'file'    => 'El campo :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe tener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe tener al menos :min registros.',
    ],
    'not_in'               => 'El campo seleccionado :attribute es inválido.',
    'numeric'              => 'El campo :attribute debe ser un número.',
    'regex'                => 'El campo :attribute tiene un formato invalido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_with'        => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values están presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de :values están presentes.',
    'same'                 => 'El campo :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El campo :attribute debe ser :size kilobytes.',
        'string'  => 'El campo :attribute debe ser :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size registros.',
    ],
    'timezone'             => 'El campo :attribute debe ser una zona válida.',
    'unique'               => 'El campo :attribute ya fué usado.',
    'url'                  => 'El campo :attribute tiene un formato inválido.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | El campo following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
