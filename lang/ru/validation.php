<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Языковые строки проверки
    |--------------------------------------------------------------------------
    |
    | Следующие языковые строки содержат сообщения об ошибках по умолчанию,
    | используемые классом валидатора. Некоторые из этих правил имеют несколько
    | версий, например, правила размера. Не стесняйтесь настраивать каждое из
    | этих сообщений здесь.
    |
    */

    'accepted' => 'Поле :attribute должно быть принято.',
    'accepted_if' => 'Поле :attribute должно быть принято, когда :other равно :value.',
    'active_url' => 'Поле :attribute должно быть действительным URL.',
    'after' => 'Поле :attribute должно быть датой после :date.',
    'after_or_equal' => 'Поле :attribute должно быть датой после или равной :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры, дефисы и нижние подчеркивания.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'ascii' => 'Поле :attribute может содержать только однобайтные буквенно-цифровые символы и знаки.',
    'before' => 'Поле :attribute должно быть датой до :date.',
    'before_or_equal' => 'Поле :attribute должно быть датой до или равной :date.',
    'between' => [
        'array' => 'Поле :attribute должно содержать от :min до :max элементов.',
        'file' => 'Размер файла в поле :attribute должен быть от :min до :max килобайт.',
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'string' => 'Длина поля :attribute должна быть от :min до :max символов.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'can' => 'Поле :attribute содержит неразрешенное значение.',
    'confirmed' => 'Подтверждение поля :attribute не совпадает.',
    'contains' => 'В поле :attribute отсутствует обязательное значение.',
    'current_password' => 'Пароль неверен.',
    'date' => 'Поле :attribute не является действительной датой.',
    'date_equals' => 'Поле :attribute должно быть датой, равной :date.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'decimal' => 'Поле :attribute должно содержать :decimal десятичных знаков.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено, когда :other равно :value.',
    'different' => 'Поля :attribute и :other должны различаться.',
    'digits' => 'Поле :attribute должно быть :digits цифр.',
    'digits_between' => 'Поле :attribute должно быть между :min и :max цифрами.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'doesnt_end_with' => 'Поле :attribute не должно заканчиваться одним из следующих: :values.',
    'doesnt_start_with' => 'Поле :attribute не должно начинаться с одного из следующих: :values.',
    'email' => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих: :values.',
    'enum' => 'Выбранное значение для :attribute некорректно.',
    'exists' => 'Выбранное значение для :attribute некорректно.',
    'extensions' => 'Поле :attribute должно иметь одно из следующих расширений: :values.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'array' => 'Поле :attribute должно содержать больше чем :value элементов.',
        'file' => 'Размер файла в поле :attribute должен быть больше :value килобайт.',
        'numeric' => 'Поле :attribute должно быть больше :value.',
        'string' => 'Длина поля :attribute должна быть больше :value символов.',
    ],
    'gte' => [
        'array' => 'Поле :attribute должно содержать не менее :value элементов.',
        'file' => 'Размер файла в поле :attribute должен быть не меньше :value килобайт.',
        'numeric' => 'Поле :attribute должно быть не меньше :value.',
        'string' => 'Длина поля :attribute должна быть не меньше :value символов.',
    ],
    'hex_color' => 'Поле :attribute должно быть действительным шестнадцатеричным цветом.',
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение для :attribute некорректно.',
    'in_array' => 'Поле :attribute должно присутствовать в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6' => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json' => 'Поле :attribute должно быть корректной JSON строкой.',
    'list' => 'Поле :attribute должно быть списком.',
    'lowercase' => 'Поле :attribute должно быть в нижнем регистре.',
    'lt' => [
        'array' => 'Поле :attribute должно содержать меньше чем :value элементов.',
        'file' => 'Размер файла в поле :attribute должен быть меньше :value килобайт.',
        'numeric' => 'Поле :attribute должно быть меньше :value.',
        'string' => 'Длина поля :attribute должна быть меньше :value символов.',
    ],
    'lte' => [
        'array' => 'Поле :attribute не должно содержать более :value элементов.',
        'file' => 'Размер файла в поле :attribute должен быть не больше :value килобайт.',
        'numeric' => 'Поле :attribute должно быть не больше :value.',
        'string' => 'Длина поля :attribute должна быть не больше :value символов.',
    ],
    'mac_address' => 'Поле :attribute должно быть действительным MAC-адресом.',
    'max' => [
        'array' => 'Поле :attribute не должно содержать более :max элементов.',
        'file' => 'Размер файла в поле :attribute не должен превышать :max килобайт.',
        'numeric' => 'Поле :attribute не должно быть больше :max.',
        'string' => 'Длина поля :attribute не должна превышать :max символов.',
    ],
    'max_digits' => 'Поле :attribute не должно содержать более :max цифр.',
    'mimes' => 'Поле :attribute должно быть файлом типа: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом типа: :values.',
    'min' => [
        'array' => 'Поле :attribute должно содержать как минимум :min элементов.',
        'file' => 'Размер файла в поле :attribute должен быть не менее :min килобайт.',
        'numeric' => 'Поле :attribute должно быть не меньше :min.',
        'string' => 'Длина поля :attribute должна быть не менее :min символов.',
    ],
    'min_digits' => 'Поле :attribute должно содержать не менее :min цифр.',
    'missing' => 'Поле :attribute должно отсутствовать.',
    'missing_if' => 'Поле :attribute должно отсутствовать, когда :other равно :value.',
    'missing_unless' => 'Поле :attribute должно отсутствовать, если :other не равно :value.',
    'missing_with' => 'Поле :attribute должно отсутствовать, когда присутствует :values.',
    'missing_with_all' => 'Поле :attribute должно отсутствовать, когда присутствуют :values.',
    'multiple_of' => 'Поле :attribute должно быть кратным :value.',
    'not_in' => 'Выбранное значение для :attribute некорректно.',
    'not_regex' => 'Формат поля :attribute неверен.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'password' => [
        'letters' => 'Поле :attribute должно содержать хотя бы одну букву.',
        'mixed' => 'Поле :attribute должно содержать хотя бы одну заглавную и одну строчную букву.',
        'numbers' => 'Поле :attribute должно содержать хотя бы одну цифру.',
        'symbols' => 'Поле :attribute должно содержать хотя бы один символ.',
        'uncompromised' => 'Данный :attribute появился в утечке данных. Пожалуйста, выберите другой :attribute.',
    ],
    'present' => 'Поле :attribute должно присутствовать.',
    'present_if' => 'Поле :attribute должно присутствовать, когда :other равно :value.',
    'present_unless' => 'Поле :attribute должно присутствовать, если :other не равно :value.',
    'present_with' => 'Поле :attribute должно присутствовать, когда присутствует :values.',
    'present_with_all' => 'Поле :attribute должно присутствовать, когда присутствуют :values.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, когда :other равно :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, если :other не в :values.',
    'prohibits' => 'Поле :attribute запрещает присутствие :other.',
    'regex' => 'Формат поля :attribute неверен.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_array_keys' => 'Поле :attribute должно содержать записи для: :values.',
    'required_if' => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_if_accepted' => 'Поле :attribute обязательно для заполнения, когда :other принято.',
    'required_if_declined' => 'Поле :attribute обязательно для заполнения, когда :other отклонено.',
    'required_unless' => 'Поле :attribute обязательно для заполнения, если :other не в :values.',
    'required_with' => 'Поле :attribute обязательно для заполнения, когда присутствует :values.',
    'required_with_all' => 'Поле :attribute обязательно для заполнения, когда присутствуют :values.',
    'required_without' => 'Поле :attribute обязательно для заполнения, когда :values отсутствует.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не присутствует.',
    'same' => 'Поля :attribute и :other должны совпадать.',
    'size' => [
        'array' => 'Поле :attribute должно содержать :size элементов.',
        'file' => 'Размер файла в поле :attribute должен быть :size килобайт.',
        'numeric' => 'Поле :attribute должно быть равным :size.',
        'string' => 'Длина поля :attribute должна быть :size символов.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться с одного из следующих: :values.',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'uploaded' => 'Не удалось загрузить файл в поле :attribute.',
    'uppercase' => 'Поле :attribute должно быть в верхнем регистре.',
    'url' => 'Поле :attribute должно быть действительным URL.',
    'ulid' => 'Поле :attribute должно быть действительным ULID.',
    'uuid' => 'Поле :attribute должно быть действительным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Пользовательские строки проверки
    |--------------------------------------------------------------------------
    |
    | Здесь вы можете указать пользовательские сообщения проверки для атрибутов,
    | используя соглашение "attribute.rule" для именования строк. Это позволяет
    | быстро указать конкретное пользовательское сообщение для заданного правила
    | атрибута.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'пользовательское сообщение',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Пользовательские атрибуты проверки
    |--------------------------------------------------------------------------
    |
    | Следующие языковые строки используются для замены нашего заполнителя
    | атрибута на что-то более читабельное, например, "Адрес электронной почты"
    | вместо "email". Это помогает нам сделать сообщения более понятными.
    |
    */

    'attributes' => [],

];
