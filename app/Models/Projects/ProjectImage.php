<?php

namespace App\Models\Projects;

use App\Models\BaseModel;

class ProjectImage extends BaseModel
{
    protected $table = 'project_images';
    protected $fillable = ['project_id', 'caption_tr', 'caption_en', 'main_image', 'publish', 'position', 'created_by', 'updated_by'];
    public static $rules = array(
        'project_id' => 'required',
    );
    public static $updaterules = array(
        'project_id' => 'required',
    );

    public static function messages()
    {
        return[
            'project_id.required'=>'Proje adı boş olamaz',
        ];
    }

    public static $fields = array('project_id', 'caption_tr', 'caption_en');
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
     * An article image belongs to an article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}