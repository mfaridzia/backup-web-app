<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Massage_Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function formOrder($id) 
    {
        $masseus = Massage_Service::find($id);
        return view('orders.order', compact('masseus'));
    }

    public function orderJasa()
    {
        
    }
}
