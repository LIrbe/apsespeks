<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Pieteikšanās kontrolētājs
    |--------------------------------------------------------------------------
    |
    | Šis kontrolētājs autentificē lietotājus lapā un rāda 
    | lietotājam pieteikšanās skatus.
    |
    */

    use AuthenticatesUsers;

    /**
     * Nosaka, kur novirzīt lietotājus pēc piekļūšanas.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Izveido jaunu kontrolētāja instanci.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    //AMF01
    public function loginPage(){
        return view("auth.login");
    }
    
    //AMF02
    public function login(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate(); //izveido jaunu sesijas atslēgu, lai lietotājs paliek pilnvarots sesijā

            return back();
        }
        else{
            throw ValidationException::withMessages([
                'credentials' => 'Incorrect email or password!'
            ]);
        }
    }

    //AMF03
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back();
    }
}
