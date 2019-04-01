<?php

namespace App\Models;

class Sector extends BaseModel
{
    protected $table = 'sectors';
    protected $fillable = ['title_tr', 'title_en', 'created_by', 'updated_by'];
    public static $rules = array(
        'title_tr' => 'required',
    );
    public static $updaterules = array(
        'title_tr' => 'required'
    );
    public static function messages()
    {
        return[
            'title_tr.required'=>'Sektör adı boş olamaz',
        ];
    }

    public static $fields = array('title_tr', 'title_en');
    public static $imageFields = array(
    );
    public static $imageFieldNames = array(
    );
    public static $docFields = array(
    );
    public static $booleanFields = array(
    );
    public static $dateFields = array(
    );
    public static $urlFields = array(
    );
}