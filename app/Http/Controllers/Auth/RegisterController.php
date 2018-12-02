<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\userRegistered;
// override
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'         => 'required|string|max:255',
            'email'        => 'required|string|email|max:255|unique:users',
            'password'     => 'required|string|min:6|confirmed',
            'address'      => 'required|string|max:250',
            'age'          => 'required|integer',
            'gender'       => 'required|string|max:20',
            'number_phone' => 'required|string|max:15',
            'photo'        => 'required|mimes:jpeg,jpg,png|max:2000'
        ]);
    }

    /* overdide function */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $name = 'mastel-' . time() . '.' . $request->file('photo')->extension();
        $request->file('photo')->storeAs('public/photo', $name);

        event(new Registered($user = $this->create( $request->all() )));

        return redirect('/login')->with('warning-register', 'Silahkan cek email untuk mengaktifkan akun');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $name = 'mastel-' . time() . '.' . $data['photo']->extension();
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
            'address'  => $data['address'],
            'age'      => $data['age'],
            'gender'   => $data['gender'],
            'number_phone' => $data['number_phone'],
            'photo'    => $name,
            'token'    => str_random(20) // generate token random
        ]);

        // kirim email ke user untuk tahap validasi
        Mail::to($user->email)->send(new userRegistered($user));

    }

    /*
        fungsi untuk verifikasi token dari email user
    */
    public function verify_register($token, $id) 
    {
        // cari data user yg melakukan validasi
        $user = User::find($id);
        if(!$user)
            return abort(404);
        
        // cek apakah token user valid
        if($user->token != $token) {
            return redirect('login')->with('warning', 'Token tidak cocok');
        }

        // mengubah status user menjadi 1
        $user->status = 1;
        $user->save();

        // login dan redirect user ke halaman home jika status sudah = 1
        $this->guard()->login($user);
        return redirect('/home');
        
    }

}
