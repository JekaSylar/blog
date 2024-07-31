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

    'accepted' => 'Поле :attribute має бути прийняте.',
    'accepted_if' => 'Поле :attribute має бути прийняте, коли :other дорівнює :value.',
    'active_url' => 'Поле :attribute має бути дійсним URL.',
    'after' => 'Поле :attribute має бути датою після :date.',
    'after_or_equal' => 'Поле :attribute має бути датою не раніше :date.',
    'alpha' => 'Поле :attribute може містити лише літери.',
    'alpha_dash' => 'Поле :attribute може містити лише літери, цифри, дефіси та підкреслення.',
    'alpha_num' => 'Поле :attribute може містити лише літери та цифри.',
    'array' => 'Поле :attribute має бути масивом.',
    'ascii' => 'Поле :attribute може містити лише однобайтові буквено-цифрові символи та символи.',
    'before' => 'Поле :attribute має бути датою до :date.',
    'before_or_equal' => 'Поле :attribute має бути датою не пізніше :date.',
    'between' => [
        'array' => 'Поле :attribute має містити від :min до :max елементів.',
        'file' => 'Поле :attribute має бути від :min до :max кілобайтів.',
        'numeric' => 'Поле :attribute має бути між :min та :max.',
        'string' => 'Поле :attribute має бути від :min до :max символів.',
    ],
    'boolean' => 'Поле :attribute має бути true або false.',
    'can' => 'Поле :attribute містить неавторизоване значення.',
    'confirmed' => 'Підтвердження для поля :attribute не співпадає.',
    'contains' => 'Поле :attribute відсутнє обов\'язкове значення.',
    'current_password' => 'Пароль невірний.',
    'date' => 'Поле :attribute має бути дійсною датою.',
    'date_equals' => 'Поле :attribute має бути датою, рівною :date.',
    'date_format' => 'Поле :attribute має відповідати формату :format.',
    'decimal' => 'Поле :attribute має містити :decimal десяткових знаків.',
    'declined' => 'Поле :attribute має бути відхилене.',
    'declined_if' => 'Поле :attribute має бути відхилене, коли :other дорівнює :value.',
    'different' => 'Поле :attribute та :other мають бути різними.',
    'digits' => 'Поле :attribute має містити :digits цифр.',
    'digits_between' => 'Поле :attribute має містити від :min до :max цифр.',
    'dimensions' => 'Поле :attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute містить дубльоване значення.',
    'doesnt_end_with' => 'Поле :attribute не повинно закінчуватися на одне з наступних: :values.',
    'doesnt_start_with' => 'Поле :attribute не повинно починатися з одного з наступних: :values.',
    'email' => 'Поле :attribute має бути дійсною адресою електронної пошти.',
    'ends_with' => 'Поле :attribute має закінчуватися одним з наступних: :values.',
    'enum' => 'Вибране значення для :attribute недійсне.',
    'exists' => 'Вибране значення для :attribute недійсне.',
    'extensions' => 'Поле :attribute має містити один з наступних розширень: :values.',
    'file' => 'Поле :attribute має бути файлом.',
    'filled' => 'Поле :attribute має містити значення.',
    'gt' => [
        'array' => 'Поле :attribute має містити більше ніж :value елементів.',
        'file' => 'Поле :attribute має бути більше ніж :value кілобайтів.',
        'numeric' => 'Поле :attribute має бути більше ніж :value.',
        'string' => 'Поле :attribute має бути більше ніж :value символів.',
    ],
    'gte' => [
        'array' => 'Поле :attribute має містити :value або більше елементів.',
        'file' => 'Поле :attribute має бути не менше :value кілобайтів.',
        'numeric' => 'Поле :attribute має бути не менше :value.',
        'string' => 'Поле :attribute має бути не менше :value символів.',
    ],
    'hex_color' => 'Поле :attribute має бути дійсним шістнадцятковим кольором.',
    'image' => 'Поле :attribute має бути зображенням.',
    'in' => 'Вибране значення для :attribute недійсне.',
    'in_array' => 'Поле :attribute має бути в :other.',
    'integer' => 'Поле :attribute має бути цілим числом.',
    'ip' => 'Поле :attribute має бути дійсною IP-адресою.',
    'ipv4' => 'Поле :attribute має бути дійсною IPv4-адресою.',
    'ipv6' => 'Поле :attribute має бути дійсною IPv6-адресою.',
    'json' => 'Поле :attribute має бути дійсним JSON-рядком.',
    'list' => 'Поле :attribute має бути списком.',
    'lowercase' => 'Поле :attribute має бути в нижньому регістрі.',
    'lt' => [
        'array' => 'Поле :attribute має містити менше ніж :value елементів.',
        'file' => 'Поле :attribute має бути менше ніж :value кілобайтів.',
        'numeric' => 'Поле :attribute має бути менше ніж :value.',
        'string' => 'Поле :attribute має бути менше ніж :value символів.',
    ],
    'lte' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :value елементів.',
        'file' => 'Поле :attribute має бути не більше :value кілобайтів.',
        'numeric' => 'Поле :attribute має бути не більше :value.',
        'string' => 'Поле :attribute має бути не більше :value символів.',
    ],
    'mac_address' => 'Поле :attribute має бути дійсною MAC-адресою.',
    'max' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :max елементів.',
        'file' => 'Поле :attribute не повинно бути більше :max кілобайтів.',
        'numeric' => 'Поле :attribute не повинно бути більше :max.',
        'string' => 'Поле :attribute не повинно бути більше :max символів.',
    ],
    'max_digits' => 'Поле :attribute не повинно містити більше ніж :max цифр.',
    'mimes' => 'Поле :attribute має бути файлом типу: :values.',
    'mimetypes' => 'Поле :attribute має бути файлом типу: :values.',
    'min' => [
        'array' => 'Поле :attribute має містити не менше :min елементів.',
        'file' => 'Поле :attribute має бути не менше :min кілобайтів.',
        'numeric' => 'Поле :attribute має бути не менше :min.',
        'string' => 'Поле :attribute має бути не менше :min символів.',
    ],
    'min_digits' => 'Поле :attribute має містити не менше :min цифр.',
    'missing' => 'Поле :attribute має бути відсутнім.',
    'missing_if' => 'Поле :attribute має бути відсутнім, коли :other дорівнює :value.',
    'missing_unless' => 'Поле :attribute має бути відсутнім, якщо :other не дорівнює :value.',
    'missing_with' => 'Поле :attribute має бути відсутнім, коли :values присутні.',
    'missing_with_all' => 'Поле :attribute має бути відсутнім, коли :values присутні.',
    'multiple_of' => 'Поле :attribute має бути кратним :value.',
    'not_in' => 'Вибране значення для :attribute недійсне.',
    'not_regex' => 'Формат поля :attribute недійсний.',
    'numeric' => 'Поле :attribute має бути числом.',
    'password' => [
        'letters' => 'Поле :attribute має містити хоча б одну літеру.',
        'mixed' => 'Поле :attribute має містити хоча б одну велику та одну малу літеру.',
        'numbers' => 'Поле :attribute має містити хоча б одну цифру.',
        'symbols' => 'Поле :attribute має містити хоча б один символ.',
        'uncompromised' => 'Вказане :attribute з\'явилося у витоку даних. Будь ласка, виберіть інше :attribute.',
    ],
    'present' => 'Поле :attribute має бути присутнім.',
    'present_if' => 'Поле :attribute має бути присутнім, коли :other дорівнює :value.',
    'present_unless' => 'Поле :attribute має бути присутнім, якщо :other не дорівнює :value.',
    'present_with' => 'Поле :attribute має бути присутнім, коли :values присутні.',
    'present_with_all' => 'Поле :attribute має бути присутнім, коли :values присутні.',
    'prohibited' => 'Поле :attribute заборонене.',
    'prohibited_if' => 'Поле :attribute заборонене, коли :other дорівнює :value.',
    'prohibited_unless' => 'Поле :attribute заборонене, якщо :other не в :values.',
    'prohibits' => 'Поле :attribute забороняє присутність :other.',
    'regex' => 'Формат поля :attribute недійсний.',
    'required' => 'Поле :attribute є обов\'язковим.',
    'required_array_keys' => 'Поле :attribute має містити записи для: :values.',
    'required_if' => 'Поле :attribute є обов\'язковим, коли :other дорівнює :value.',
    'required_if_accepted' => 'Поле :attribute є обов\'язковим, коли :other прийнято.',
    'required_if_declined' => 'Поле :attribute є обов\'язковим, коли :other відхилено.',
    'required_unless' => 'Поле :attribute є обов\'язковим, якщо :other не в :values.',
    'required_with' => 'Поле :attribute є обов\'язковим, коли присутній :values.',
    'required_with_all' => 'Поле :attribute є обов\'язковим, коли присутні :values.',
    'required_without' => 'Поле :attribute є обов\'язковим, коли відсутній :values.',
    'required_without_all' => 'Поле :attribute є обов\'язковим, коли жоден з :values не присутній.',
    'same' => 'Поле :attribute має співпадати з :other.',
    'size' => [
        'array' => 'Поле :attribute має містити :size елементів.',
        'file' => 'Поле :attribute має бути :size кілобайтів.',
        'numeric' => 'Поле :attribute має бути :size.',
        'string' => 'Поле :attribute має бути :size символів.',
    ],
    'starts_with' => 'Поле :attribute має починатися з одного з наступних: :values.',
    'string' => 'Поле :attribute має бути рядком.',
    'timezone' => 'Поле :attribute має бути дійсною часовою зоною.',
    'unique' => 'Поле :attribute вже зайняте.',
    'uploaded' => 'Не вдалося завантажити поле :attribute.',
    'uppercase' => 'Поле :attribute має бути у верхньому регістрі.',
    'url' => 'Поле :attribute має бути дійсним URL.',
    'ulid' => 'Поле :attribute має бути дійсним ULID.',
    'uuid' => 'Поле :attribute має бути дійсним UUID.',


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
