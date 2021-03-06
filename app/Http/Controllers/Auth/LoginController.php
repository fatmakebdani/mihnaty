<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Professionnel;

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
    protected $redirectTo;
    public function redirectTo()
    { 
      $auth = Auth::user();
        switch (Auth::user()->role) {
            case '1':
                $this->redirectTo ='/admin';
                return $this->redirectTo;
                break;
            case '2':
                $this->redirectTo ='/candidat'.'/'.Auth::user()->candidat->id . '/edit';
                return $this->redirectTo;
                break;
            case '3':
           
  $this->redirectTo ='/professionnel'.'/'.Auth::user()->professionnel->id . '/edit';

// or
                return $this->redirectTo;
                    break;
            default:
                $this->redirectTo= '/welcome';
                return $this->redirectTo;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }






}
