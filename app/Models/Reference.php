<?php

namespace App\Models;

use App\Models\Projects\Project;

class Reference extends BaseModel
{
    protected $table = 'references';
    protected $fillable = ['customer_id', 'project_id', 'promote', 'publish', 'position', 'publish_at', 'publish_until', 'created_by', 'updated_by'];
    public static $rules = array(
        'customer_id' => 'required'
    );
    public static $updaterules = array(
        'customer_id' => 'required'
    );

    public static function messages()
    {
        return[
            'customer_id.required'=>'Müşteri adı boş olamaz',
        ];
    }

    public static $fields = array('customer_id');
    public static $imageFields = array(
    );
    public static $imageFieldNames = array(
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
    );

    public static function boot(){
        parent::boot();
        static::creating(function($model)
        {
            if($model->publish_at == null){
                $model->publish_at = todayWithFormat('Y-m-d');
            } 
        });
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
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}