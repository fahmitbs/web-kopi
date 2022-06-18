<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
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
    // protected $redirectTo = '/home';
    //protected function authenticated()
    //{
        //if(Auth::user()->role_as == '1') //1 = Admin Login
        //{
            //return redirect('dashboard');
        //}
        //elseif(Auth::user()->role_as == '0') // Normal or Default user login
        //{
            //return redirect('/')->with('status','Selamat Datang di Mitra Kopi');
        //}
    //}

    public function redirectTo()
    {
        if(Auth::user()->role_as == 'admin')
        {
            return 'dashboard';
        }
        else
        {
            return 'home';
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->role_as === 0){
                return redirect()->intended('home');
            } else if(auth()->user()->role_as === 1){
                return redirect()->intended('dashboard');
            }

            return back()->with('loginError', 'Maaf Anda Gagal melakukan Login');
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
        //$this->middleware('guest')->except('logout');
    //}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
