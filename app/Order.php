<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'order_date', 'booking_address', 'start_time', 'end_time', 'total_peyment', 'status', 'user_id', 'massage_services_id'
    ];
}
