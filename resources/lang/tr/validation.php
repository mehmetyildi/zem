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

    'accepted'             => ':attribute alanı kabul edilmelidir.',
    'active_url'           => ':attribute geçerli bir URL olmalı.',
    'after'                => ':attribute tarihi :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal'       => ':attribute tarihi :date tarihinden önce bir tarih olmamalıdır.',
    'alpha'                => ':attribute alanına sadece harf girebilirsiniz.',
    'alpha_dash'           => ':attribute alanına sadece harf, rakam ve tire girebilirsiniz.',
    'alpha_num'            => ':attribute alanına sadece harf ve rakam girebilirsiniz.',
    'array'                => ':attribute alanı bir dizi olmalıdır.',
    'before'               => ':attribute tarihi :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal'      => ':attribute tarihi :date tarihinden sonra bir tarih olmamalıdır.',
    'between'              => [
        'numeric' => ':attribute alanı :min ile :max arasında bir değer olmalıdır.',
        'file'    => ':attribute alanına :min ile :max kilobyte arası bir dosya yükleyebilirsiniz.',
        'string'  => ':attribute alanı :min ile :max karakter arasında bir uzunlukta olmalıdır.',
        'array'   => ':attribute alanında :min ile :max adet öğe olmalıdır.',
    ],
    'boolean'              => ':attribute alanı doğru ya da yanlış olarak işaretlenmelidir.',
    'confirmed'            => ':attribute alanı eşleşmiyor.',
    'date'                 => ':attribute alanı geçerli bir tarih değil.',
    'date_format'          => ':attribute alanı :format formatına uymuyor.',
    'different'            => ':attribute alanı :other alanından farklı olmalıdır.',
    'digits'               => ':attribute alanı :digits digit olmalıdır.',
    'digits_between'       => ':attribute alanı :min ile :max digit arasında olmalıdır.',
    'dimensions'           => ':attribute geçersiz ebatlara sahip.',
    'distinct'             => ':attribute alanına çifte değer girilmiş.',
    'email'                => ':attribute alanı geçerli bir e-posta olmalıdır.',
    'exists'               => 'Seçilen :attribute geçerli değil.',
    'file'                 => ':attribute alanına bir dosya yükleyebilirsiniz.',
    'filled'               => ':attribute alanı zorunludur.',
    'image'                => ':attribute bir imaj olmalıdır.',
    'in'                   => 'Seçilen :attribute geçerli değil.',
    'in_array'             => ':attribute alanı :other alanında mevcut değil.',
    'integer'              => ':attribute alanı bir tamsayı olmalıdır.',
    'ip'                   => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'json'                 => ':attribute alanı geçerli bir JSON olmalıdır.',
    'max'                  => [
        'numeric' => ':attribute alanı :max değerinden fazla olamaz.',
        'file'    => ':attribute alanı en çok :max kilobyte olabilir.',
        'string'  => ':attribute alanı :max karakterden uzun olamaz.',
        'array'   => ':attribute alanı :max adetten fazla öğeye sahip olamaz..',
    ],
    'mimes'                => ':attribute alanı için geçerli uzantı: :values.',
    'mimetypes'            => ':attribute alanı için geçerli uzantı: :values.',
    'min'                  => [
        'numeric' => ':attribute alanı :min değerinden az olamaz.',
        'file'    => ':attribute alanı en az :min kilobyte olabilir.',
        'string'  => ':attribute alanı :min karakterden kısa olamaz.',
        'array'   => ':attribute alanı :min adetten az öğeye sahip olamaz.',
    ],
    'not_in'               => 'Seçilen :attribute geçerli değil.',
    'numeric'              => ':attribute bir sayı olmalıdır.',
    'present'              => ':attribute alanı güncel olmalıdır.',
    'regex'                => ':attribute formatı geçersizdir.',
    'required'             => ':attribute alanı zorunludur.',
    'required_if'          => ':attribute alanı eğer :other değeri :value ise zorunludur.',
    'required_unless'      => ':attribute alanı, :other değeri :values içinde yer almadığı sürece zorunludur.',
    'required_with'        => ':attribute alanı eğer :values değeri güncel ise zorunludur.',
    'required_with_all'    => ':attribute alanı eğer :values değeri güncel ise zorunludur.',
    'required_without'     => ':attribute alanı eğer :values değeri güncel değil ise zorunludur',
    'required_without_all' => ':attribute alanı eğer :values değerlerinden hiçbiri güncel değil ise zorunludur',
    'same'                 => ':attribute alanı ile :other eşleşmelidir.',
    'size'                 => [
        'numeric' => ':attribute alanı :size olmalıdır.',
        'file'    => ':attribute alanı :size kilobyte olmalıdır.',
        'string'  => ':attribute alanı :size karakter olmalıdır.',
        'array'   => ':attribute alanı :size öğeleri içermelidir.',
    ],
    'string'               => ':attribute alanı string olmalıdır.',
    'timezone'             => ':attribute geçerli bir alan olmalıdır.',
    'unique'               => ':attribute için böyle bir kayıt mevcut.',
    'uploaded'             => ':attribute alanı upload edemedi.',
    'url'                  => ':attribute formatı geçersiz.',

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
