<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->input('email'),
            'password' => $request->input('password')])) {
            $user = User::whereEmail($request->email)->first();
            $request->session()->put('user_id', $user->id);
//            $value = $request->session()->get('user_id');
            return redirect()->route('home');
        }else
            return redirect()->route('loginform');
    }

    public function logout(){
        session()->forget('user_id');
        Auth::logout();
            return redirect()->route('home');
    }
}
