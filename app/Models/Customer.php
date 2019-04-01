<?php

namespace App\Models;

class Customer extends BaseModel
{
    protected $table = 'customers';
    protected $fillable = ['title_tr', 'title_en', 'logo', 'staff_name', 'staff_image', 'staff_title_tr', 'staff_title_en', 'testimonial_tr', 'testimonial_en', 'promote', 'publish', 'position', 'publish_at', 'publish_until', 'created_by', 'updated_by'];
    public static $rules = array(
        'title_tr' => 'required'
    );
    public static $updaterules = array(
        'title_tr' => 'required'
    );

    public static function messages()
    {
        return[
            'title_tr.required'=>'Müşteri adı boş olamaz',
        ];
    }

    public static $fields = array('title_tr', 'title_en', 'staff_name', 'staff_title_tr', 'staff_title_en', 'testimonial_tr', 'testimonial_en');
    public static $imageFields = array(
        ["name" => "logo", "width" => 200, "height" => 200, 'crop' => true, 'naming' => 'title_tr', 'diff' => 'logo'], //1
        ["name" => "staff_image", "width" => 200, "height" => 200, 'crop' => true, 'naming' => 'staff_name', 'diff' => 'foto'] //1
    );
    public static $imageFieldNames = array(
        "logo", "staff_image"
    );
    public static $docFields = array(
    );
    public static $booleanFields = array(
        'promote'
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
            if($model->staff_title_en == null){
                $model->staff_title_en = $model->staff_title_tr;
            }
            if($model->testimonial_en == null){
                $model->testimonial_en = $model->testimonial_tr;
            }
        });
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sectors()
    {
        return $this->belongsToMany(Sector::class);
    }

    /**
     * @return mixed
     */
    public function getSectorListAttribute(){
        return $this->sectors->pluck('id')->all();
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