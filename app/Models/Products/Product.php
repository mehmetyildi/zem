<?php

namespace App\Models\Products;

use App\Models\BaseModel;

class Product extends BaseModel
{
    protected $table = 'products';
    protected $fillable = ['category_id', 'title_tr', 'title_en', 'description_tr', 'description_en', 'advantages_tr', 'advantages_en', 'url_tr', 'url_en', 'video_path', 'main_image', 'promote', 'publish', 'position', 'publish_at', 'publish_until', 'created_by', 'updated_by', 'mobil_image'];
    public static $rules = array(
        'category_id' => 'required',
        'title_tr' => 'required',
        'description_tr'=>'required'
    );
    public static $updaterules = array(
        'category_id' => 'required',
        'title_tr' => 'required',
        'description_tr'=>'required'
    );

    public static function messages()
    {
        return[
            'title_tr.required'=>'Ürün adı boş olamaz',
            'category_id.required'=>'Kategori adı boş bırakılamaz',
            'description_tr.required'=>'Ürün açıklaması boş olamaz',
        ];
    }

    public static $fields = array('category_id', 'title_tr', 'title_en', 'description_tr', 'description_en', 'advantages_tr', 'advantages_en', 'video_path');
    public static $imageFields = array(
        ["name" => "main_image", "width" => 510, "height" => 541, 'crop' => true, 'naming' => 'title_tr', 'diff' => 'foto'], //1.61
        ["name" => "mobil_image", "width" => 434, "height" => 300, 'crop' => true, 'naming' => 'title_tr', 'diff' => 'parallax'], //2.4
    );
    public static $imageFieldNames = array(
        "main_image", "parallax_image"
    );
    public static $docFields = array(
    );
    public static $booleanFields = array(
        "promote"
    );
    public static $dateFields = array(
        "publish_at", "publish_until"
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
            if($model->advantages_en == null){
                $model->advantages_en = $model->advantages_tr;
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * An article may have many images.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}