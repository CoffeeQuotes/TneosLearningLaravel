<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $fillable = [
        'firstname', 'lastname','mobile', 'image', 'school_name', 'class', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User::class');
    }
}
