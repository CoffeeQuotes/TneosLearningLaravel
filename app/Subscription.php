<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'title','amount','payment_done', 'razorpay_id', 'category_id', 'user_id'
    ];
      public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
      {
          return $this->belongsTo('App\Category::class');
      }

      // Subscription belongs to User
      public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
      {
          return $this->belongsTo('App\User::class');
      }
}
