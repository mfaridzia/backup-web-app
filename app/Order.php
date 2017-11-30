<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'name', 'order_date', 'booking_address', 'start_time', 'end_time', 'total_peyment', 'status', 'user_id', 'tukang_id'
    ];

    public function tukang()
    {
        return $this->belongsTo('App\Tukang');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
