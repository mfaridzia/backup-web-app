<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tukang extends Model
{
    protected $fillable = [
        'name', 'address', 'number_phone', 'age', 'gender', 'photo', 'tariff'
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
