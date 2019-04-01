<?php

namespace App\Models\Products;

use App\Models\BaseModel;
use App\Models\Projects\Project;

class Category extends BaseModel
{
    protected $table = 'categories';
    protected $fillable = ['title_tr', 'title_en', 'main_image', 'icon', 'description_tr', 'description_en', 'url_tr', 'url_en', 'isDetailedCategory', 'promote', 'publish', 'position', 'publish_at', 'publish_until', 'created_by', 'updated_by', 'mobil_image'];
    public static $rules = array(
        'title_tr' => 'required',
        'main_image'=>'required',
        'description_tr'=>'required',

    );
    public static $updaterules = array(
        'title_tr' => 'required',
        'description_tr'=>'required',
    );

    public static function messages()
    {
        return[
            'main_image.required'=>'Ana resim alanı boş olamaz',
            'title_tr.required'=>'Ürün adı boş olamaz',
            'description_tr.required'=>'Ürün açıklaması boş olamaz',
        ];
    }

    public static $fields = array('title_tr', 'title_en', 'description_tr', 'description_en');
    public static $imageFields = array(
        ["name" => "main_image", "width" => 510, "height" => 541, 'crop' => true, 'naming' => 'title_tr', 'diff' => 'foto'], //2.25
        ["name" => "mobil_image", "width" => 434, "height" => 300, 'crop' => true, 'naming' => 'title_tr', 'diff' => 'parallax'], //2.4
    );
    public static $imageFieldNames = array(
        "main_image", "parallax_image"
    );
    public static $docFields = array(
        "icon"
    );
    public static $booleanFields = array(
        "isDetailedCategory", "promote"
    );
    public static $dateFields = array(
    );
    public static $urlFields = array(
        ["name" => "url_tr", "map" => "title_tr"],
        ["name" => "url_en", "map" => "title_en"]
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
            if($model->description_en == null){
                $model->description_en = $model->description_tr;
            }
            if($model->url_en == null){
                $model->url_en = $model->url_tr;
            }
        });
    }
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}