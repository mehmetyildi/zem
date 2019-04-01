<?php

namespace App\Models\Projects;

use App\Models\BaseModel;
use App\Models\City;
use App\Models\Customer;
use App\Models\Products\Category;
use App\Models\Products\Product;
use App\Models\Reference;

class Project extends BaseModel
{
    protected $table = 'projects';
    protected $fillable = ['customer_id', 'project_type_id', 'city_id', 'product_id', 'title_tr', 'title_en', 'caption_tr', 'caption_en', 'description_tr', 'description_en', 'area_size_tr', 'area_size_en', 'duration_tr', 'duration_en', 'url_tr', 'url_en', 'video_path', 'main_image', 'promote', 'publish', 'position', 'publish_at', 'publish_until', 'created_by', 'updated_by'];
    public static $rules = array(
        'project_type_id' => 'required',
        'customer_id'=>'required',
        'title_tr'=>'required',
        'caption_tr'=>'required',
        'description_tr'=>'required',
    );
    public static $updaterules = array(
        'project_type_id' => 'required',
        'customer_id'=>'required',
        'title_tr'=>'required',
        'caption_tr'=>'required',
        'description_tr'=>'required',
    );

    public static function messages()
    {
        return[
            'project_type_id.required'=>'Proje tipi adı boş olamaz',
            'customer_id.required'=>'Müşteri alanı boş bırakılamaz',
            'title_tr.required'=>'Başlık alanı boş bırakılamaz',
            'caption_tr.required'=>'Özet boş bırakılamaz',
            'description.required'=>'Yszı alanı boş bırakılamaz'

        ];
    }

    public static $fields = array('customer_id', 'project_type_id', 'city_id', 'product_id', 'title_tr', 'title_en', 'caption_tr', 'caption_en', 'description_tr', 'description_en', 'area_size_tr', 'area_size_en', 'duration_tr', 'duration_en', 'video_path');
    public static $imageFields = array(
        ["name" => "main_image", "width" => 1600, "height" => 900, 'crop' => true, 'naming' => 'title_tr', 'diff' => ''] //1.66
    );
    public static $imageFieldNames = array(
        "main_image"
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
            if($model->caption_en == null){
                $model->caption_en = $model->caption_tr;
            }
            if($model->description_en == null){
                $model->description_en = $model->description_tr;
            }
            if($model->area_size_en == null){
                $model->area_size_en = $model->area_size_tr;
            }
            if($model->duration_en == null){
                $model->duration_en = $model->duration_tr;
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
    public function type()
    {
        return $this->belongsTo(ProjectType::class, 'project_type_id');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
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
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * @return mixed
     */
    public function getProductListAttribute(){
        return $this->products->pluck('id')->all();
    }

    /**
     * An article may have many images.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function references()
    {
        return $this->hasMany(Reference::class);
    }
}