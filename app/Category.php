<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{
    public function subscription(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Subscription');
    }

    public  function life(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Life');
    }

}

