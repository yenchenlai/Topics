<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 驗證語言行
    |--------------------------------------------------------------------------
    |
    | 以下語言行包含驗證器類別使用的預設錯誤訊息。有些規則有多個版本，例如大小規則。您可以在這裡自由調整每個訊息。
    |
    */

    'accepted' => '必須接受 :attribute。',
    'accepted_if' => '當 :other 是 :value 時，:attribute 必須被接受。',
    'active_url' => ':attribute 不是有效的URL。',
    'after' => ':attribute 必須是 :date 之後的日期。',
    'after_or_equal' => ':attribute 必須是 :date 或之後的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、數字、破折號和底線。',
    'alpha_num' => ':attribute 只能包含字母和數字。',
    'array' => ':attribute 必須是一個陣列。',
    'before' => ':attribute 必須是 :date 之前的日期。',
    'before_or_equal' => ':attribute 必須是 :date 或之前的日期。',
    'between' => [
        'array' => ':attribute 必須有 :min 到 :max 項。',
        'file' => ':attribute 必須在 :min 到 :max 千字範圍內。',
        'numeric' => ':attribute 必須在 :min 到 :max 之間。',
        'string' => ':attribute 必須在 :min 到 :max 字元之間。',
    ],
    'boolean' => ':attribute 欄位必須是 true 或 false。',
    'confirmed' => ':attribute 確認不符合。',
    'current_password' => '密碼不正確。',
    'date' => ':attribute 不是有效的日期。',
    'date_equals' => ':attribute 必須是等於 :date 的日期。',
    'date_format' => ':attribute 不符合格式 :format。',
    'declined' => ':attribute 必須被拒絕。',
    'declined_if' => '當 :other 是 :value 時，:attribute 必須被拒絕。',
    'different' => ':attribute 和 :other 必須不同。',
    'digits' => ':attribute 必須是 :digits 位數字。',
    'digits_between' => ':attribute 必須在 :min 到 :max 位數字之間。',
    'dimensions' => ':attribute 有無效的圖片尺寸。',
    'distinct' => ':attribute 欄位具有重複值。',
    'email' => ':attribute 必須是有效的電子郵件地址。',
    'ends_with' => ':attribute 必須以以下之一結尾：:values。',
    'enum' => '所選擇的 :attribute 無效。',
    'exists' => '所選擇的 :attribute 無效。',
    'file' => ':attribute 必須是檔案。',
    'filled' => ':attribute 欄位必須有值。',
    'gt' => [
        'array' => ':attribute 必須有超過 :value 項。',
        'file' => ':attribute 必須大於 :value 千字範圍。',
        'numeric' => ':attribute 必須大於 :value。',
        'string' => ':attribute 必須多於 :value 字元。',
    ],
    'gte' => [
        'array' => ':attribute 必須有 :value 項目或更多。',
        'file' => ':attribute 必須大於或等於 :value 千字範圍。',
        'numeric' => ':attribute 必須大於或等於 :value。',
        'string' => ':attribute 必須多於或等於 :value 字元。',
    ],
    'image' => ':attribute 必須是圖片。',
    'in' => '所選擇的 :attribute 無效。',
    'in_array' => ':attribute 欄位不存在於 :other 中。',
    'integer' => ':attribute 必須是整數。',
    'ip' => ':attribute 必須是有效的IP地址。',
    'ipv4' => ':attribute 必須是有效的IPv4地址。',
    'ipv6' => ':attribute 必須是有效的IPv6地址。',
    'json' => ':attribute 必須是有效的JSON字串。',
    'lt' => [
        'array' => ':attribute 必須有少於 :value 項。',
        'file' => ':attribute 必須小於 :value 千字範圍。',
        'numeric' => ':attribute 必須小於 :value。',
        'string' => ':attribute 必須少於 :value 字元。',
    ],
    'lte' => [
        'array' => ':attribute 必須不超過 :value 項。',
        'file' => ':attribute 必須小於或等於 :value 千字範圍。',
        'numeric' => ':attribute 必須小於或等於 :value。',
        'string' => ':attribute 必須少於或等於 :value 字元。',
    ],
    'mac_address' => ':attribute 必須是有效的MAC地址。',
    'max' => [
        'array' => ':attribute 不得超過 :max 項。',
        'file' => ':attribute 不得大於 :max 千字範圍。',
        'numeric' => ':attribute 不得大於 :max。',
        'string' => ':attribute 不得大於 :max 字元。',
    ],
    'mimes' => ':attribute 必須是以下類型的文件：:values。',
    'mimetypes' => ':attribute 必須是以下類型的文件：:values。',
    'min' => [
        'array' => ':attribute 必須至少有 :min 項。',
        'file' => ':attribute 必須至少 :min 千字範圍。',
        'numeric' => ':attribute 必須至少是 :min。',
        'string' => ':attribute 必須至少有 :min 字元。',
    ],
    'multiple_of' => ':attribute 必須是 :value 的倍數。',
    'not_in' => '所選擇的 :attribute 無效。',
    'not_regex' => ':attribute 格式無效。',
    'numeric' => ':attribute 必須是數字。',
    'password' => [
        'letters' => ':attribute 必須包含至少一個字母。',
        'mixed' => ':attribute 必須包含至少一個大寫字母和一個小寫字母。',
        'numbers' => ':attribute 必須包含至少一個數字。',
        'symbols' => ':attribute 必須包含至少一個符號。',
        'uncompromised' => '給定的 :attribute 出現在數據洩露中。請選擇不同的 :attribute。',
    ],
    'present' => ':attribute 欄位必須存在。',
    'prohibited' => ':attribute 欄位是禁止的。',
    'prohibited_if' => '當 :other 是 :value 時，:attribute 欄位是禁止的。',
    'prohibited_unless' => '除非 :other 在 :values 中，否則 :attribute 欄位是禁止的。',
    'prohibits' => ':attribute 欄位禁止 :other 存在。',
    'regex' => ':attribute 格式無效。',
    'required' => ':attribute 欄位是必需的。',
    'required_array_keys' => ':attribute 欄位必須包含以下鍵的條目：:values。',
    'required_if' => '當 :other 是 :value 時，:attribute 欄位是必需的。',
    'required_unless' => '除非 :other 在 :values 中，否則 :attribute 欄位是必需的。',
    'required_with' => '當 :values 存在時，:attribute 欄位是必需的。',
    'required_with_all' => '當 :values 全部存在時，:attribute 欄位是必需的。',
    'required_without' => '當 :values 不存在時，:attribute 欄位是必需的。',
    'required_without_all' => '當 :values 全部不存在時，:attribute 欄位是必需的。',
    'same' => ':attribute 和 :other 必須相符。',
    'size' => [
        'array' => ':attribute 必須包含 :size 項目。',
        'file' => ':attribute 必須是 :size 千字範圍。',
        'numeric' => ':attribute 必須是 :size。',
        'string' => ':attribute 必須是 :size 字元。',
    ],
    'starts_with' => ':attribute 必須以以下之一開頭：:values。',
    'string' => ':attribute 必須是字串。',
    'timezone' => ':attribute 必須是有效的時區。',
    'unique' => ':attribute 已經被使用。',
    'uploaded' => ':attribute 上傳失敗。',
    'url' => ':attribute 必須是有效的URL。',
    'uuid' => ':attribute 必須是有效的UUID。',

    /*
    |--------------------------------------------------------------------------
    | 自訂驗證語言行
    |--------------------------------------------------------------------------
    |
    | 在這裡，您可以為屬性使用 "attribute.rule" 慣例指定自訂驗證訊息，以命名這些行。這使得快速指定給定屬性規則的特定自訂語言行變得容易。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 自訂驗證屬性
    |--------------------------------------------------------------------------
    |
    | 以下語言行用於將我們的屬性占位符與一些更易讓讀者理解的東西進行交換，例如 "E-Mail Address" 而不是 "email"。這只是幫助我們使消息更具表達性的簡單方法。
    |
    */

    'attributes' => [],

];
