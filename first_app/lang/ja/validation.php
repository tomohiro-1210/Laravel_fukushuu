<?php

return [

    /*
    |------------------------------------------------- -------------------------
    |検証言語の行
    |------------------------------------------------- -------------------------
    |
    |次の言語行には、次の言語で使用されるデフォルトのエラー メッセージが含まれています。
    |バリデータクラス。これらのルールの中には、複数のバージョンがあるものもあります。
    |サイズのルールとして。ここで各メッセージを自由に調整してください。
    |
    */

    'accepted' => ':attribute を受け入れる必要があります。',
    'accepted_if' => ':other が :value の場合、:attribute は受け入れられなければなりません。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は :date 以降の日付である必要があります。',
    'after_or_equal' => ':attribute は :date 以降の日付である必要があります。',
    'alpha' => ':attribute は文字のみを含む必要があります。',
    'alpha_dash' => ':attribute は文字、数字、ダッシュ、アンダースコアのみを含む必要があります。',
    'alpha_num' => ':attribute は文字と数字のみを含む必要があります。',
    'array' => ':attribute は配列である必要があります。',
    'ascii' => ':attribute は単一バイトの英数字と記号のみを含む必要があります。',
    'before' => ':attribute は :date より前の日付である必要があります。',
    'before_or_equal' => ':attribute は :date より前または同じ日付である必要があります。',
    'between' => [
        'array' => ':attribute は :min から :max の項目を持つ必要があります。',
        'file' => ':attribute は :min から :max キロバイトの間である必要があります。',
        'numeric' => ':attribute は :min から :max の間である必要があります。',
        'string' => ':attribute は :min から :max 文字の間である必要があります。',
    ],
    'boolean' => ':attribute フィールドはtrueまたはfalseである必要があります。',
    'confirmed' => ':attribute 確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attribute は有効な日付ではありません。',
    'date_equals' => ':attribute は :date と同じ日付である必要があります。',
    'date_format' => ':attribute は :format 形式と一致しません。',
    'decimal' => ':attribute は :decimal 小数点以下の桁数である必要があります。',
    'declined' => ':attribute は辞退する必要があります。',
    'declined_if' => ':other が :value の場合、:attribute は辞退する必要があります。',
    'different' => ':attribute と :other は異なる必要があります。',
    'digits' => ':attribute は :digits 桁である必要があります。',
    'digits_between' => ':attribute は :min から :max 桁の間である必要があります。',
    'dimensions' => ':attribute の画像サイズが無効です。',
    'distinct' => ':attribute フィールドに重複した値があります。',
    'doesnt_end_with' => ':attribute は次のいずれかで終わってはなりません: :values。',
    'doesnt_start_with' => ':attribute は次のいずれかで始まってはなりません: :values。',
    'email' => ':attribute は有効なメールアドレスである必要があります。',
    'ends_with' => ':attribute は次のいずれかで終わる必要があります: :values。',
    'enum' => '選択した :attribute は無効です。',
    'exists' => '選択した :attribute は無効です。',
    'file' => ':attribute はファイルである必要があります。',
    'filled' => ':attribute フィールドに値が必要です。',
    'gt' => [
        'array' => ':attribute は :value 項目より多く含む必要があります。',
        'file' => ':attribute は :value キロバイトより大きい必要があります。',
        'numeric' => ':attribute は :value より大きい必要があります。',
        'string' => ':attribute は :value 文字より大きい必要があります。',
    ],
    'gte' => [
        'array' => ':attribute は :value 項目以上を含む必要があります。',
        'file' => ':attribute は :value キロバイト以上である必要があります。',
        'numeric' => ':attribute は :value 以上である必要があります。',
        'string' => ':attribute は :value 文字以上である必要があります。',
    ],
    'image' => ':attribute は画像である必要があります。',
    'in' => '選択した :attribute は無効です。',
    'in_array' => ':attribute フィールドは :other に存在しません。',
    'integer' => ':attribute は整数である必要があります。',
    'ip' => ':attribute は有効なIPアドレスである必要があります。',
    'ipv4' => ':attribute は有効なIPv4アドレスである必要があります。',
    'ipv6' => ':attribute は有効なIPv6アドレスである必要があります。',
    'json' => ':attribute は有効なJSON文字列である必要があります。',
    'lowercase' => ':attribute は小文字である必要があります。',
    'lt' => [
        'array' => ':attribute は :value 項目より少なく含む必要があります。',
        'file' => ':attribute は :value キロバイトより小さい必要があります。',
        'numeric' => ':attribute は :value より小さい必要があります。',
        'string' => ':attribute は :value 文字より小さい必要があります。',
    ],
    'lte' => [
        'array' => ':attribute は :value 項目以下を含む必要があります。',
        'file' => ':attribute は :value キロバイト以下である必要があります。',
        'numeric' => ':attribute は :value 以下である必要があります。',
        'string' => ':attribute は :value 文字以下である必要があります。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスである必要があります。',
    'max' => [
        'array' => ':attribute は :max 項目を超えてはなりません。',
        'file' => ':attribute は :max キロバイトを超えてはなりません。',
        'numeric' => ':attribute は :max を超えてはなりません。',
        'string' => ':attribute は :max 文字を超えてはなりません。',
    ],
    'max_digits' => ':attribute は :max 桁を超えてはなりません。',
    'mimes' => ':attribute は次のタイプのファイルである必要があります: :values。',
    'mimetypes' => ':attribute は次のタイプのファイルである必要があります: :values。',
    'min' => [
        'array' => ':attribute は少なくとも :min 項目を含む必要があります。',
        'file' => ':attribute は少なくとも :min キロバイトである必要があります。',
        'numeric' => ':attribute は少なくとも :min である必要があります。',
        'string' => ':attribute は少なくとも :min 文字である必要があります。',
    ],
    'min_digits' => ':attribute は少なくとも :min 桁である必要があります。',
    'missing' => ':attribute フィールドが必要です。',
    'missing_if' => ':other が :value の場合、:attribute フィールドが必要です。',
    'missing_unless' => ':other が :value でない場合、:attribute フィールドが必要です。',
    'missing_with' => ':values が存在する場合、:attribute フィールドが必要です。',
    'missing_with_all' => ':values が存在する場合、:attribute フィールドが必要です。',
    'multiple_of' => ':attribute は :value の倍数である必要があります。',
    'not_in' => '選択した :attribute は無効です。',
    'not_regex' => ':attribute の形式は無効です。',
    'numeric' => ':attribute は数値である必要があります。',
    'password' => [
        'letters' => ':attribute には少なくとも1文字が含まれている必要があります。',
        'mixed' => ':attribute には少なくとも1つの大文字と1つの小文字が含まれている必要があります。',
        'numbers' => ':attribute には少なくとも1つの数字が含まれている必要があります。',
        'symbols' => ':attribute には少なくとも1つの記号が含まれている必要があります。',
        'uncompromised' => '指定された :attribute はデータ漏洩に含まれています。異なる :attribute を選択してください。',
    ],
    'present' => ':attribute フィールドが存在する必要があります。',
    'prohibited' => ':attribute フィールドは禁止されています。',
    'prohibited_if' => ':other が :value の場合、:attribute フィールドは禁止されています。',
    'prohibited_unless' => ':other が :values に含まれていない限り、:attribute フィールドは禁止されています。',
    'prohibits' => ':attribute フィールドは :other が存在することを禁止します。',
    'regex' => ':attribute の形式は無効です。',
    'required' => ':attribute フィールドは必須です。',
    'required_array_keys' => ':attribute フィールドには次の項目が含まれている必要があります: :values。',
    'required_if' => ':other が :value の場合、:attribute フィールドは必須です。',
    'required_if_accepted' => ':other が受け入れられた場合、:attribute フィールドは必須です。',
    'required_unless' => ':other が :values に含まれていない限り、:attribute フィールドは必須です。',
    'required_with' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_with_all' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_without' => ':values が存在しない場合、:attribute フィールドは必須です。',
    'required_without_all' => ':values が一つも存在しない場合、:attribute フィールドは必須です。',
    'same' => ':attribute と :other は一致する必要があります。',
    'size' => [
        'array' => ':attribute は :size 項目を含む必要があります。',
        'file' => ':attribute は :size キロバイトである必要があります。',
        'numeric' => ':attribute は :size である必要があります。',
        'string' => ':attribute は :size 文字である必要があります。',
    ],
    'starts_with' => ':attribute は次のいずれかで始まる必要があります: :values。',
    'string' => ':attribute は文字列である必要があります。',
    'timezone' => ':attribute は有効なタイムゾーンである必要があります。',
    'unique' => ':attribute は既に使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'uppercase' => ':attribute は大文字である必要があります。',
    'url' => ':attribute は有効なURLである必要があります。',
    'ulid' => ':attribute は有効なULIDである必要があります。',
    'uuid' => ':attribute は有効なUUIDである必要があります。',

    /*
    |------------------------------------------------- -------------------------
    |カスタム検証言語行
    |------------------------------------------------- -------------------------
    |
    |ここで、属性のカスタム検証メッセージを指定できます。
    |行の名前には規則「attribute.rule」を使用します。これにより、
    |特定の属性ルールに特定のカスタム言語行を指定します。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],

    /*
    |------------------------------------------------- -------------------------
    |カスタム検証属性
    |------------------------------------------------- -------------------------
    |
    |次の言語行は、属性のプレースホルダーを交換するために使用されます。
    |代わりに「電子メールアドレス」など、より読みやすいものを使用してください
    | 「メール」の。これは単にメッセージをより表現力豊かにするのに役立ちます。
    |
    */

    'attributes' => [
        'password' => "パスワード",
        'name' => '氏名',
        'title' => '件名',
        'email' => 'メールアドレス',
        'url' => 'ホームページ',
        'gender' => '性別',
        'age' => '年齢',
        'contact' => 'お問い合わせ内容',
        'caution' => '注意事項',
    ],

];