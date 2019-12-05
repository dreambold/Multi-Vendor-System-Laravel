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

    'accepted'             => 'De :attribute moet worden geaccepteerd.',
    'active_url'           => 'De :attribute is geen geldige URL.',
    'after'                => 'De :attribute moet een datum zijn na :date.',
    'alpha'                => 'De :attribute mag alleen letters bevatten.',
    'alpha_dash'           => 'De :attribute mag alleen letters, cijfers en dashes bevatten.',
    'alpha_num'            => 'De :attribute mag alleen letters en cijfers bevatten.',
    'array'                => 'De :attribute moet een array zijn.',
    'before'               => 'De :attribute moet een datum zijn voor :date.',
    'between'              => [
        'numeric' => 'Het :attribute moet tussen de :min en :max zijn.',
        'file'    => 'De :attribute moet tussen de :min en :max kilobytes zijn.',
        'string'  => 'De :attribute moet tussen de :min en :max karakters zijn.',
        'array'   => 'De :attribute moet tussen de :min en :max items zijn.',
    ],
    'boolean'              => 'Het :attribute veld moet true of een false waarde bevatten.',
    'confirmed'            => 'De :attribute bevestiging komt niet overeen.',
    'date'                 => 'De :attribute is geen geldige datum.',
    'date_format'          => 'Het :attribute komt niet overeen met het formaat :format.',
    'different'            => 'De :attribute en :other moeten verschillend zijn.',
	'digits'               => 'De :attribute moet zijn :digits cijfers.',
    'digits_between'       => 'De :attribute moet tussen de :min en :max cijfers zijn.',
    'email'                => 'Het :attribute moet een valide e-mail adres bevatten.',
    'filled'               => 'Het :attribute veld is verplicht.',
    'exists'               => 'Het geselecteerde :attribute is ongeldig.',
    'image'                => 'Het :attribute moet een afbeelding zijn.',
    'in'                   => 'Het geselecteerde :attribute is ongeldig.',
    'integer'              => 'De :attribute moet een integer getal zijn.',
    'ip'                   => 'De :attribute moet een geldig IP adres zijn.',
    'max'                  => [
        'numeric' => ':attribute mag niet groter zijn dan :max.',
        'file'    => ':attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => ':attribute mag niet groter zijn dan :max karakters.',
        'array'   => ':attribute mag niet groter zijn dan :max items.',
    ],
    'mimes'                => 'De :attribute moet een bestand zijn van het type: :values.',
    'min'                  => [
        'numeric' => ':attribute moet op zijn minst :min zijn.',
        'file'    => ':attribute moet op zijn minst :min kilobytes zijn.',
        'string'  => ':attribute moet op zijn minst :min karakters zijn.',
        'array'   => ':attribute moet op zijn minst :min items zijn.',
    ],
    'not_in'               => 'het geselecteerde :attribute is ongeldig.',
    'numeric'              => 'De :attribute moet een getal zijn.',
    'regex'                => 'Het :attribute formaat is ongeldig.',
    'required'             => 'Het :attribute veld is vereist.',
    'required_if'          => 'Het :attribute veld is vereist wanneer :other is :value.',
    'required_with'        => 'Het :attribute veld is vereist wanneer :values aanwezig is.',
    'required_with_all'    => 'Het :attribute veld is vereist wanneer :values aanwezig is.',
    'required_without'     => 'Het :attribute veld is vereist wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is vereist wanneer geen van de :values aanwezig zijn.',
    'same'                 => 'De :attribute en :other moeten gelijk zijn.',
    'size'                 => [
        'numeric' => 'De :attribute moet :size zijn.',
        'file'    => 'Het :attribute moet :size kilobytes zijn.',
        'string'  => 'Het :attribute moet :size karakters zijn.',
        'array'   => 'De :attribute moet :size items bevatten.',
    ],
    'timezone'             => 'De :attribute moet een geldige tijdzone zijn.',
    'unique'               => 'De :attribute is al ingenomen.',
    'url'                  => 'Het :attribute formaat is ongeldig.',

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
            'rule-name' => 'aangepast-bericht',
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

    'attributes' => [],

];
