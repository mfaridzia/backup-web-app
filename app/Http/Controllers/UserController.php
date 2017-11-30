<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;

class UserController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setting($id)
    {
        $user = User::find($id);
        return view('user.setting', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

    	if(!$user)
            abort(404);

    	return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // validasi data
        $this->validate($request, [
	        'name'         => 'required|min:5|max:200',
	        'email'        => 'required|max:200',
	        'address'      => 'required|min:10|max:200',
	        'age'          => 'required',
	        'number_phone' => 'required'
    	]);

    	$user = User::find($id);
    	$user->name          = $request->name;
    	$user->email         = $request->email;
    	$user->address       = $request->address;
    	$user->age           = $request->age;
    	$user->number_phone  = $request->number_phone;
    	$user->save();

    	$request->session()->flash('notification', 'Sukses Mengupdate Data');

        return redirect('/user/setting/'. $id);
        
    }

    // form edit password
    public function edit_password($id)
    {
        $user = User::find($id);

        if(!$user) 
            return abort(404);

        return view('user.edit_password', compact('user'));
    }

    // proses edit password
    public function update_password(Request $request, $id)
    {
        // jangan lupa taruh validasi juga disini

        $user = User::find($id);

        if(Hash::check($request->old_password, $user['password']) && $request->password == $request->password_confirmation) {
            $user->password = bcrypt($request->password);
            $user->save();
            
            $request->session()->flash('notification', 'Password berhasil dirubah!');
            return redirect('user/ganti-password/'. $id .'/edit');
        } 
        else {
            // alert error
            $request->session()->flash('notification-error', 'Password not changed!');
            return redirect('user/ganti-password/'. $id .'/edit');
        }

    }

    // bikin function dashboard user untuk menampilkan histori pemesannanya(opsional)

}
