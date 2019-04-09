<?php

namespace App\Models\Articles;

use App\Models\BaseModel;

class ArticleImage extends BaseModel
{
    protected $table = 'article_images';
    protected $fillable = ['article_id', 'title_tr', 'title_en', 'main_image', 'publish', 'position', 'created_by', 'updated_by'];
    public static $rules = array(
        'article_id' => 'required',
    );
    public static $updaterules = array(
        'article_id' => 'required',
    );

    public static function messages()
    {
        return[
            'article_id.required'=>'Haber adı boş olamaz',
        ];
    }

    public static $fields = array('article_id', 'title_tr', 'title_en');
    public static $imageFields = array(
        ["name" => "main_image", "width" => 1100, "height" => 680, 'crop' => true, 'naming' => 'title_tr', 'diff' => ''] //1.61
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
            if($model->title_en == null){
                $model->title_en = $model->title_tr;
            }
        });
    }


    /**
     * An article image belongs to an article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

}