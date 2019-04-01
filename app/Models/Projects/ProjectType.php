<?php

namespace App\Models\Projects;
use App\Models\BaseModel;

class ProjectType extends BaseModel
{
    protected $table = 'project_types';
    protected $fillable = ['title_tr', 'title_en', 'icon', 'created_by', 'updated_by'];
    public static $rules = array(
        'title_tr' => 'required',
    );
    public static $updaterules = array(
        'title_tr' => 'required'
    );

    public static function messages()
    {
        return[
            'title_tr.required'=>'Proje adı boş olamaz',
        ];
    }

    public static $fields = array('title_tr', 'title_en');
    public static $imageFields = array(
    );
    public static $imageFieldNames = array(
    );
    public static $docFields = array(
        "icon"
    );
    public static $booleanFields = array(
    );
    public static $dateFields = array(
    );
    public static $urlFields = array(
    );

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}