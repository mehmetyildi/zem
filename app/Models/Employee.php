<?php

namespace App\Models;

class Employee extends BaseModel
{
    protected $table = 'employees';
    protected $fillable = ['name', 'job_title_tr', 'job_title_en', 'main_image', 'desk_phone', 'desk_extension', 'mobile_phone', 'pbx', 'email', 'linkedin', 'whatsapp', 'vcf', 'publish', 'position', 'publish_at', 'publish_until', 'created_by', 'updated_by'];
    public static $rules = array(
        'name' => 'required',
        'job_title_tr' => 'required'
    );
    public static $updaterules = array(
        'name' => 'required',
        'job_title_tr' => 'required'
    );

    public static function messages()
    {
        return[
            'name.required'=>'Çalışan adı boş olamaz',
            'job_title_tr.unique'=>'Çalışan pozisyonu boş olamaz',
        ];
    }

    public static $fields = array('name', 'job_title_tr', 'job_title_en', 'desk_phone', 'desk_extension', 'mobile_phone', 'pbx', 'email', 'linkedin', 'whatsapp');
    public static $imageFields = array(
        ["name" => "main_image", "width" => 264, "height" => 320, 'crop' => true, 'naming' => 'name', 'diff' => 'foto'], //0.73,
    );
    public static $imageFieldNames = array(
        "main_image"
    );
    public static $docFields = array(
        "vcf"
    );
    public static $booleanFields = array(
    );
    public static $dateFields = array(
        "publish_at", "publish_until"
    );
    public static $urlFields = array(
    );

    public static function boot(){
        parent::boot();
        static::creating(function($model)
        {
            if($model->publish_at == null){
                $model->publish_at = todayWithFormat('Y-m-d');
            }
            if($model->job_title_en == null){
                $model->job_title_en = $model->job_title_tr;
            }
        });
    }
}