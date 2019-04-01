<?php

namespace App\Models;

class Slide extends BaseModel
{
    protected $table = 'slides';
    protected $fillable = ['title_tr', 'title_en', 'caption_tr', 'caption_en', 'link', 'openInNewTab', 'main_image', 'publish', 'position', 'publish_at', 'publish_until', 'created_by', 'updated_by'];
    public static $rules = array(
    );
    public static $updaterules = array(
    );

    public static $fields = array('title_tr', 'title_en', 'caption_tr', 'caption_en', 'link');
    public static $imageFields = array(
        ["name" => "main_image", "width" => 1173, "height" => 827, 'crop' => true, 'naming' => 'title_tr', 'diff' => ''] //2.37
    );
    public static $imageFieldNames = array(
        "main_image"
    );
    public static $docFields = array(
    );
    public static $booleanFields = array(
        'openInNewTab'
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
            if($model->title_en == null){
                $model->title_en = $model->title_tr;
            }
            if($model->caption_en == null){
                $model->caption_en = $model->caption_tr;
            }
        });
    }
}