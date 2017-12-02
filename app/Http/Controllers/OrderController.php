<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Order;
use App\Tukang;
use App\Mail\Ordered; // mail ordered
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function formOrder($id) 
    {
        $masseus = Tukang::find($id);
        return view('orders.order', compact('masseus'));
    }

    public function orderJasa(Request $request, $masseus_id)
    {
        // validasi
        $this->validate($request, [
            'order_date'      => 'required|date',
            'booking_address' => 'required|min:20',
	        'start_time'      => 'required',
            'end_time'        => 'required',
            'total_peyment'   => 'required'
        ]);
        
        $order = Order::create([
            'name'            => Auth::user()->name,
            'order_date'      => $request->order_date,
            'booking_address' => $request->booking_address,
            'start_time'      => $request->start_time,
            'end_time'        => $request->end_time,
            'total_peyment'   => $request->total_peyment,
            'status'          => 'Test coba!',
            'user_id'         => Auth::user()->id,
            'tukang_id'       => $masseus_id
        ]);

        // fungsi untuk kirim email ke user setelah proses pemesanan 
        Mail::to(Auth::user()->email)->send(new Ordered($order));
        // end prosess

        $request->session()->flash('notification', 'Sukses Pesan Tukang Pijit');
        return redirect('order/masseus/' . $masseus_id);
        
    }

    public function showDataOrder()
    {
        $users  = User::with('orders')->paginate(3);
        //$users  = User::with('orders')->orderBy('id', 'desc')->paginate(3);
        $orders = Order::all();
        return view('orders.show-data-orders', compact('users', 'orders'));
    }

}
