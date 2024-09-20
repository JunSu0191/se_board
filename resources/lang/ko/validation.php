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

    'accepted' => ':attribute를 동의해야 합니다.',
    'accepted_if' => ':other가 :value일 때 :attribute를 동의해야 합니다.',
    'active_url' => ':attribute는 유효한 URL이어야 합니다.',
    'after' => ':attribute는 :date 이후 날짜여야 합니다.',
    'after_or_equal' => ':attribute는 :date와 같거나 이후 날짜여야 합니다.',
    'alpha' => ':attribute는 문자만 포함할 수 있습니다.',
    'alpha_dash' => ':attribute는 문자, 숫자, 대시(-), 밑줄(_)만 포함할 수 있습니다.',
    'alpha_num' => ':attribute는 문자와 숫자만 포함할 수 있습니다.',
    'array' => ':attribute는 배열이어야 합니다.',
    'ascii' => ':attribute는 ASCII 문자만 포함할 수 있습니다.',
    'before' => ':attribute는 :date 이전 날짜여야 합니다.',
    'before_or_equal' => ':attribute는 :date와 같거나 이전 날짜여야 합니다.',
    'between' => [
        'array' => ':attribute는 :min에서 :max 항목 사이여야 합니다.',
        'file' => ':attribute는 :min에서 :max 킬로바이트 사이여야 합니다.',
        'numeric' => ':attribute는 :min에서 :max 사이여야 합니다.',
        'string' => ':attribute는 :min에서 :max 글자 사이여야 합니다.',
    ],
    'boolean' => ':attribute는 true 또는 false여야 합니다.',
    'can' => ':attribute 필드에 허용되지 않는 값이 포함되어 있습니다.',
    'confirmed' => ':attribute 확인이 일치하지 않습니다.',
    'contains' => ':attribute에 필수 값이 누락되었습니다.',
    'current_password' => '비밀번호가 올바르지 않습니다.',
    'date' => ':attribute는 유효한 날짜여야 합니다.',
    'date_equals' => ':attribute는 :date와 같은 날짜여야 합니다.',
    'date_format' => ':attribute는 :format 형식과 일치해야 합니다.',
    'decimal' => ':attribute는 :decimal 소수 자릿수를 가져야 합니다.',
    'declined' => ':attribute는 거절되어야 합니다.',
    'declined_if' => ':other가 :value일 때 :attribute는 거절되어야 합니다.',
    'different' => ':attribute와 :other는 달라야 합니다.',
    'digits' => ':attribute는 :digits 자리 숫자여야 합니다.',
    'digits_between' => ':attribute는 :min에서 :max 자리 숫자여야 합니다.',
    'dimensions' => ':attribute의 이미지 크기가 유효하지 않습니다.',
    'distinct' => ':attribute에 중복된 값이 있습니다.',
    'doesnt_end_with' => ':attribute는 다음 중 하나로 끝날 수 없습니다: :values.',
    'doesnt_start_with' => ':attribute는 다음 중 하나로 시작할 수 없습니다: :values.',
    'email' => ':attribute는 유효한 이메일 주소여야 합니다.',
    'ends_with' => ':attribute는 다음 중 하나로 끝나야 합니다: :values.',
    'enum' => '선택된 :attribute가 유효하지 않습니다.',
    'exists' => '선택된 :attribute가 유효하지 않습니다.',
    'extensions' => ':attribute는 다음 확장자 중 하나여야 합니다: :values.',
    'file' => ':attribute는 파일이어야 합니다.',
    'filled' => ':attribute에 값이 있어야 합니다.',
    'gt' => [
        'array' => ':attribute는 :value 항목보다 많아야 합니다.',
        'file' => ':attribute는 :value 킬로바이트보다 커야 합니다.',
        'numeric' => ':attribute는 :value보다 커야 합니다.',
        'string' => ':attribute는 :value 글자보다 많아야 합니다.',
    ],
    'gte' => [
        'array' => ':attribute는 :value 항목 이상이어야 합니다.',
        'file' => ':attribute는 :value 킬로바이트 이상이어야 합니다.',
        'numeric' => ':attribute는 :value 이상이어야 합니다.',
        'string' => ':attribute는 :value 글자 이상이어야 합니다.',
    ],
    'hex_color' => ':attribute는 유효한 16진수 색상이어야 합니다.',
    'image' => ':attribute는 이미지여야 합니다.',
    'in' => '선택된 :attribute가 유효하지 않습니다.',
    'in_array' => ':attribute는 :other에 존재해야 합니다.',
    'integer' => ':attribute는 정수여야 합니다.',
    'ip' => ':attribute는 유효한 IP 주소여야 합니다.',
    'ipv4' => ':attribute는 유효한 IPv4 주소여야 합니다.',
    'ipv6' => ':attribute는 유효한 IPv6 주소여야 합니다.',
    'json' => ':attribute는 유효한 JSON 문자열이어야 합니다.',
    'list' => ':attribute는 목록이어야 합니다.',
    'lowercase' => ':attribute는 소문자여야 합니다.',
    'lt' => [
        'array' => ':attribute는 :value 항목보다 적어야 합니다.',
        'file' => ':attribute는 :value 킬로바이트보다 작아야 합니다.',
        'numeric' => ':attribute는 :value보다 작아야 합니다.',
        'string' => ':attribute는 :value 글자보다 적어야 합니다.',
    ],
    'lte' => [
        'array' => ':attribute는 :value 항목을 초과해서는 안 됩니다.',
        'file' => ':attribute는 :value 킬로바이트 이하여야 합니다.',
        'numeric' => ':attribute는 :value 이하이어야 합니다.',
        'string' => ':attribute는 :value 글자 이하이어야 합니다.',
    ],
    'mac_address' => ':attribute는 유효한 MAC 주소여야 합니다.',
    'max' => [
        'array' => ':attribute는 :max 항목을 초과할 수 없습니다.',
        'file' => ':attribute는 :max 킬로바이트를 초과할 수 없습니다.',
        'numeric' => ':attribute는 :max를 초과할 수 없습니다.',
        'string' => ':attribute는 :max 글자를 초과할 수 없습니다.',
    ],
    'max_digits' => ':attribute는 :max 자릿수를 초과할 수 없습니다.',
    'mimes' => ':attribute는 다음 유형의 파일이어야 합니다: :values.',
    'mimetypes' => ':attribute는 다음 유형의 파일이어야 합니다: :values.',
    'min' => [
        'array' => ':attribute는 최소한 :min 항목을 포함해야 합니다.',
        'file' => ':attribute는 최소한 :min 킬로바이트여야 합니다.',
        'numeric' => ':attribute는 최소 :min 이상이어야 합니다.',
        'string' => ':attribute는 최소한 :min 글자이어야 합니다.',
    ],
    'min_digits' => ':attribute는 최소한 :min 자릿수여야 합니다.',
    'missing' => ':attribute 필드는 누락되어야 합니다.',
    'missing_if' => ':other가 :value일 때 :attribute 필드는 누락되어야 합니다.',
    'missing_unless' => ':other가 :value가 아닌 경우 :attribute 필드는 누락되어야 합니다.',
    'missing_with' => ':values가 있을 때 :attribute 필드는 누락되어야 합니다.',
    'missing_with_all' => ':values가 있을 때 :attribute 필드는 누락되어야 합니다.',
    'multiple_of' => ':attribute는 :value의 배수여야 합니다.',
    'not_in' => '선택된 :attribute가 유효하지 않습니다.',
    'not_regex' => ':attribute 형식이 유효하지 않습니다.',
    'numeric' => ':attribute는 숫자여야 합니다.',
    'password' => [
        'letters' => ':attribute에는 최소한 하나의 문자가 포함되어야 합니다.',
        'mixed' => ':attribute에는 최소한 하나의 대문자와 소문자가 포함되어야 합니다.',
        'numbers' => ':attribute에는 최소한 하나의 숫자가 포함되어야 합니다.',
        'symbols' => ':attribute에는 최소한 하나의 기호가 포함되어야 합니다.',
        'uncompromised' => '제공된 :attribute가 데이터 유출에서 발견되었습니다. 다른 :attribute를 선택하십시오.',
    ],
    'present' => ':attribute 필드가 존재해야 합니다.',
    'present_if' => ':other가 :value일 때 :attribute 필드가 존재해야 합니다.',
    'present_unless' => ':other가 :value가 아닌 경우 :attribute 필드가 존재해야 합니다.',
    'present_with' => ':values가 있을 때 :attribute 필드가 존재해야 합니다.',
    'present_with_all' => ':values가 있을 때 :attribute 필드가 존재해야 합니다.',
    'prohibited' => ':attribute 필드는 금지됩니다.',
    'prohibited_if' => ':other가 :value일 때 :attribute 필드는 금지됩니다.',
    'prohibited_unless' => ':other가 :value가 아닌 경우 :attribute 필드는 금지됩니다.',
    'prohibits' => ':attribute는 :other의 존재를 금지합니다.',
    'regex' => ':attribute 형식이 유효하지 않습니다.',
    'required' => ':attribute 필드는 필수입니다.',
    'required_array_keys' => ':attribute 필드는 다음 항목을 포함해야 합니다: :values.',
    'required_if' => ':other가 :value일 때 :attribute 필드는 필수입니다.',
    'required_if_accepted' => ':other가 수락될 때 :attribute 필드는 필수입니다.',
    'required_unless' => ':other가 :values에 있지 않는 한 :attribute 필드는 필수입니다.',
    'required_with' => ':values가 있을 때 :attribute 필드는 필수입니다.',
    'required_with_all' => ':values가 있을 때 :attribute 필드는 필수입니다.',
    'required_without' => ':values가 없을 때 :attribute 필드는 필수입니다.',
    'required_without_all' => ':values 중 어느 것도 없을 때 :attribute 필드는 필수입니다.',
    'same' => ':attribute와 :other는 일치해야 합니다.',
    'size' => [
        'array' => ':attribute는 :size 항목을 포함해야 합니다.',
        'file' => ':attribute는 :size 킬로바이트여야 합니다.',
        'numeric' => ':attribute는 :size여야 합니다.',
        'string' => ':attribute는 :size 글자여야 합니다.',
    ],
    'starts_with' => ':attribute는 다음 중 하나로 시작해야 합니다: :values.',
    'string' => ':attribute는 문자열이어야 합니다.',
    'timezone' => ':attribute는 유효한 시간대여야 합니다.',
    'unique' => '이미 사용중인 이메일입니다.',
    'uploaded' => ':attribute 업로드에 실패했습니다.',
    'uppercase' => ':attribute는 대문자여야 합니다.',
    'url' => ':attribute는 유효한 URL이어야 합니다.',
    'uuid' => ':attribute는 유효한 UUID여야 합니다.',

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

    'attributes' => [
        'password' => '비밀번호',
        'phone' => '전화번호',
    ],

];
