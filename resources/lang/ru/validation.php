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

    'accepted'             => 'Поле :attribute должено быть принято.',
    'active_url'           => 'Поле :attribute имеет не действитльный URL.',
    'after'                => 'Поле :attribute должено быть датой после :date.',
    'alpha'                => 'Поле :attribute может содержать только буквы.',
    'alpha_dash'           => 'Поле :attribute может содержать быквы, числа и подчеркивание.',
    'alpha_num'            => 'Поле :attribute может содержать быквы, числа.',
    'array'                => 'Поле :attribute должно быть маттивом.',
    'before'               => 'Поле :attribute должено быть датой перед :date.',
    'between'              => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file'    => 'Поле :attribute должно быть между :min и :max кБ.',
        'string'  => 'Поле :attribute должно быть между :min и :max знаков.',
        'array'   => 'Поле :attribute должно быть между :min и :max позиций.',
    ],
    'boolean'              => 'Поле :attribute должно иметь логическое значение истана или ложь.',
    'confirmed'            => 'Поле :attribute подтвержения не отмечено.',
    'date'                 => 'Поле :attribute имеет неверный формат даты.',
    'date_format'          => 'Поле :attribute должно иметь формат соответствующий :format.',
    'different'            => 'Поле :attribute и :other должны отличаться.',
    'digits'               => 'Поле :attribute должно содержать :digits чисел.',
    'digits_between'       => 'Поле :attribute должно содердать :min и :max чисел.',
    'email'                => 'Поле :attribute должно быть правильный E-mail адресом.',
    'filled'               => 'Поле :attribute обязательно для заполнения.',
    'exists'               => 'Поле выбора :attribute недейтсвительно.',
    'image'                => 'Поле :attribute должно быть изображением.',
    'in'                   => 'Поле выбора :attribute недейтсвительно.',
    'integer'              => 'Поле :attribute должен быть целым числом.',
    'ip'                   => 'Поле :attribute должно быть правильным IP адресом.',
    'max'                  => [
        'numeric' => 'Поле :attribute должно быть меньше, чем :max.',
        'file'    => 'Поле :attribute должно быть меньше, чем :max кБ.',
        'string'  => 'Поле :attribute должно содержать меньше, чем :max символов.',
        'array'   => 'Поле :attribute должно иметь меньше, чем :max позиций.',
    ],
    'mimes'                => 'Поле :attribute должно быть файлом типа: :values.',
    'min'                  => [
        'numeric' => 'Поле :attribute должно быть больше, чем :min.',
        'file'    => 'Поле :attribute должно быть больше, чем :min кБ.',
        'string'  => 'Поле :attribute должно содержать больше, чем :min символов.',
        'array'   => 'Поле :attribute должно иметь больше, чем :min позиций.',
    ],
    'not_in'               => 'Поле выбора :attribute содержит неправильные значения.',
    'numeric'              => 'Поле :attribute должно быть числом.',
    'regex'                => 'Поле :attribute имеет неправильный формат.',
    'required'             => 'Поле :attribute обязательно для заполнения.',
    'required_if'          => 'Поле :attribute обязательно для заполнения, так как :other имеет значение :value.',
    'required_with'        => 'Поле :attribute обязательно для заполнения, так как присутствует :values.',
    'required_with_all'    => 'Поле :attribute обязательно для заполнения, так как присутствуют :values.',
    'required_without'     => 'Поле :attribute обязательно для заполнения, так как значение :values не присутствует.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, так как значения :values не присутствуют.',
    'same'                 => 'Поле :attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть :size.',
        'file'    => 'Поле :attribute должно быть :size кБ.',
        'string'  => 'Поле :attribute должно быть :size символов.',
        'array'   => 'Поле :attribute должно содержать :size позиций.',
    ],
    'timezone'             => 'Поле :attribute должно быть действительной зоной.',
    'unique'               => 'Поле :attribute уже существует (не уникально).',
    'url'                  => 'Поле :attribute имеет некорректный формат.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
