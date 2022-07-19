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

    'accepted' => 'O campo :attribute precisa ser aceito.',
    'accepted_if' => 'O campo :attribute precisa ser aceito quando o :other for :value.',
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after' => 'O campo :attribute deve ser uma data após :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data maior ou igual a :date.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, números, traços e underline.',
    'alpha_num' => 'O campo :attribute deve conter somente letras e números.',
    'array' => 'O campo :attribute deve ser uma matriz simples (array).',
    'before' => 'O campo :attribute deve ser uma data antes de :date.',
    'before_or_equal' => 'O campo :attribute deve ser uma data menor ou igual a :date.',
    'between' => [
        'array' => 'O campo :attribute deve conter entre :min e :max itens.',
        'file' => 'O campo :attribute deve estar entre :min e :max kb.',
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'string' => 'O campo :attribute deve estar entre :min e :max caracteres.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo :attribute não confere com o campo de confirmação.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O campo :attribute é uma data inválida.',
    'date_equals' => 'O campo :attribute deve ter uma data igual a :date.',
    'date_format' => 'O campo :attribute não corresponde ao formato :format.',
    'declined' => 'O campo :attribute deve ser recusado.',
    'declined_if' => 'O campo :attribute deve ser recusado quando :other for :value.',
    'different' => 'O campo :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve ter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O campo :attribute tem uma imagem com dimensões inválidas.',
    'distinct' => 'O campo :attribute tem o valor duplicado.',
    'doesnt_start_with' => 'O campo :attribute não pode começar com um dos seguintes valores: :values.',
    'email' => 'O campo :attribute deve ser um endereço de email válido.',
    'ends_with' => 'O campo :attribute deve terminar com um dos seguintes valores: :values.',
    'enum' => 'O campo :attribute selecionado é inválido.',
    'exists' => 'O campo :attribute selecionado é inválido.',
    'file' => 'O campo :attribute deve conter um arquivo.',
    'filled' => 'O campo :attribute deve conter um valor.',
    'gt' => [
        'array' => 'O campo :attribute deve ter mais que :value itens.',
        'file' => 'O campo :attribute deve ser maior que :value kb.',
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'string' => 'O campo :attribute deve ser maior que :value caracteres.',
    ],
    'gte' => [
        'array' => 'O campo :attribute deve conter :value itens ou mais.',
        'file' => 'O campo :attribute deve ser maior ou igual que :value kb.',
        'numeric' => 'O campo :attribute deve ser maior ou igual que :value.',
        'string' => 'O campo :attribute deve ser maior ou igual que :value caracteres.',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O campo :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve ser um inteiro.',
    'ip' => 'O campo :attribute deve ser um endereço de IP válido.',
    'ipv4' => 'O campo :attribute  deve ser um endereço de IPv4 válido.',
    'ipv6' => 'O campo :attribute  deve ser um endereço de IPv6 válido.',
    'json' => 'O campo :attribute  deve ser uma string JSON válida.',
    'lt' => [
        'array' => 'O campo :attribute deve ter menos que :value itens.',
        'file' => 'O campo :attribute deve ter menos que :value kb.',
        'numeric' => 'O campo :attribute deve ter menos que :value.',
        'string' => 'O campo :attribute deve ter menos que :value caracteres.',
    ],
    'lte' => [
        'array' => 'O campo :attribute não deve ter mais que :value itens.',
        'file' => 'O campo :attribute deve ser menor ou igual a :value kb.',
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'string' => 'O campo :attribute deve ser menor ou igual a :value caracteres.',
    ],
    'mac_address' => 'O campo :attribute deve ser um endereço MAC válido.',
    'max' => [
        'array' => 'O campo :attribute não deve ser maior que :max itens.',
        'file' => 'O campo :attribute não deve ser maior que :max kb.',
        'numeric' => 'O campo :attribute não deve ser maior que :max.',
        'string' => 'O campo :attribute não deve ser maior que :max caracteres.',
    ],
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'array' => 'O campo :attribute deve conter no mínimo :min itens.',
        'file' => 'O campo :attribute deve ter no mínimo :min kb.',
        'numeric' => 'O campo :attribute deve ter no mínimo :min.',
        'string' => 'O campo :attribute deve ter no mínimo :min caracteres.',
    ],
    'multiple_of' => 'O campo :attribute deve ser um múltiplo de :value.',
    'not_in' => 'O campo :attribute selecionado é inválido.',
    'not_regex' => 'O campo :attribute está com o formato inválido.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'password' => [
        'letters' => 'O campo :attribute deve conter pelo menos uma letra.',
        'mixed' => 'O campo :attribute deve conter no mínimo uma letra maiúscula e uma minúscula.',
        'numbers' => 'O campo :attribute deve conter pelo menos um número.',
        'symbols' => 'O campo :attribute deve conter pelo menos um símbolo.',
        'uncompromised' => 'O campo :attribute fornecido apareceum em um vazamento de dados. Por favor, escolha um valor diferente para :attribute.',
    ],
    'present' => 'O campo :attribute deve estar presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other for :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other seja :values.',
    'prohibits' => 'O campo :attribute proíbe :other de estar presente.',
    'regex' => 'O campo :attribute tem o formato inválido.',
    'required' => 'O campo :attribute é necessário.',
    'required_array_keys' => 'O campo :attribute campo deve conter entradas para: :values.',
    'required_if' => 'O campo :attribute é necessário quando :other for :value.',
    'required_unless' => 'O campo :attribute é necessário a menos que :other seja :values.',
    'required_with' => 'O campo :attribute é necessário quando :values está presente.',
    'required_with_all' => 'O campo :attribute é necessário quando :values estão presentes.',
    'required_without' => 'O campo :attribute é necessário quando :values não está presemte.',
    'required_without_all' => 'O campo :attribute é necessário quando nenhuum dos valores :values estão presentes.',
    'same' => 'O campo :attribute e :other devem ser iguais.',
    'size' => [
        'array' => 'O campo :attribute deve conter :size itens.',
        'file' => 'O campo :attribute deve ter :size kb.',
        'numeric' => 'O campo :attribute deve ter :size.',
        'string' => 'O campo :attribute deve ter :size caracteres.',
    ],
    'starts_with' => 'O campo :attribute deve começar com um dos seguintes valores: :values.',
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve ter um fuso horário válido.',
    'unique' => 'O campo :attribute já foi usado.',
    'uploaded' => 'O campo :attribute falhou no upload.',
    'url' => 'O campo :attribute deve ser uma URL válida.',
    'uuid' => 'O campo :attribute deve ser uma UUID válida.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
