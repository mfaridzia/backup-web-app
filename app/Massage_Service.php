<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massage_Service extends Model
{
    protected $table = 'massage_services';

    protected $fillable = [
        'name', 'address', 'age', 'number_phone', 'photo', 'gender', 'tariff', 'status'
    ];
}
