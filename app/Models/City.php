<?php

namespace App\Models;

use App\Models\Projects\Project;

class City extends BaseModel
{
    protected $table = 'cities';
    protected $fillable = ['name', 'created_by', 'updated_by'];
    public static $rules = array(
        'name' => 'required',
    );
    public static $updaterules = array(
        'name' => 'required'
    );

    public static function messages()
    {
        return[
            'name.required'=>'Şehir adı boş olamaz',
        ];
    }

    public static $fields = array('name');
    public static $imageFields = array(
    );
    public static $imageFieldNames = array(
    );
    public static $docFields = array(
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