<?php

return [

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
        'name' => [
            'required' => 'Поля имя обязательна.',
            'string' => 'Поля имя должна быть строкой.',
            'min' => 'Поля имя должна содержать минимум :min символов.',
            'max' => 'Поля имя должна содержать максимум :max символов.',
        ],
        'email' => [
            'required' => 'Поля email обязательна.',
            'email' => 'Поля email должна быть электронной почтой.',
        ],
        'feedback' =>[
            'required' => 'Поля описание обязательна.',
            'string' => 'Поля описание должна быть строкой.',
            'max' => 'Поля описание должна содержать максимум :max символов.',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
