<?php

namespace App\Models\Products;

use App\Models\BaseModel;

class ProductImage extends BaseModel
{
    protected $table = 'product_images';
    protected $fillable = ['product_id', 'caption_tr', 'caption_en', 'main_image', 'publish', 'position', 'created_by', 'updated_by'];
    public static $rules = array(
        'product_id' => 'required',
        'main_image'=>'required',

    );
    public static $updaterules = array(
        'product_id' => 'required',
        'main_image'=>'required',
    );

    public static function messages()
    {
        return[
            'product_id.required'=>'Ürün adı boş olamaz',
            'main_image.required'=>'Ürün ana resmi boş olamaz',
        ];
    }

    public static $fields = array('product_id', 'caption_tr', 'caption_en');
    public static $imageFields = array(
        ["name" => "main_image", "width" => 1600, "height" => 900, 'crop' => true, 'naming' => 'caption_tr', 'diff' => ''] //1.61
    );
    public static $imageFieldNames = array(
        "main_image"
    );
    public static $docFields = array(
    );
    public static $booleanFields = array(
    );
    public static $dateFields = array(
    );

    public static function boot(){
        parent::boot();
        static::creating(function($model)
        {
            if($model->caption_en == null){
                $model->caption_en = $model->caption_tr;
            }
        });
    }


    /**
     * A product image belongs to an product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}