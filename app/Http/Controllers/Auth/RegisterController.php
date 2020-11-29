<?php

namespace App\Http\Controllers\Auth;

use App\Basket;
use App\Country;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
//use GuzzleHttp\Psr7\Request;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $token = $request->input('_token') ?: $request->header('X-CSRF-TOKEN');
        $newUser = User::create([
            'fname' => $request['fname'],
            'mname' => $request['mname'],
            'lname' => $request['lname'],
            'phone_number' => $request['phone_number'],
            'birth_date' => $request['birth_date'],
            'address' => $request['address'],
            'gender' => $request['gender'],
            'role' => 'user',
            'remember_token' => $token,
            'country_id' => $request['country_id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        Basket::create([
            'user_id' => $newUser->id
        ]);

        return redirect('/login');
    }

    public function registerForm(){
        $countries = Country::all();
        return view('auth.register', compact('countries'));
    }
}
