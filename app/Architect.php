<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Architect extends Model
{
    use Notifiable;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'architect';

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'user_id',
        'email',	
        'no_hp',
        'short_description',
        'id_project',
        'project_min',
        'project_max',
        'location service',
        'facebook_url',
        'instagram_url',
        'linkedin_url',
        'twitter_url',
        'profile_image',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
