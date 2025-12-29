<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Reģistrācijas kontrolētājs
    |--------------------------------------------------------------------------
    |
    | Šajā kontrolētājā notiek jaunu lietotāju reģistrācija, 
    | šo lietotāju datu pārbaude un lietotāja novirzīšana uz 
    | reģistrācijas skatu. 
    |
    */

    use RegistersUsers;

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
        $this->middleware('guest');
    }

    /**
     * Iegūst validētāju ienākošam reģistrācijas pieprasījumam.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Izveido jaunu lietotāju pēc pareizas reģistrācijas.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function registerPage(){
        return view("auth.register");
    }
    
    public function register(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create($validated);

        return redirect()->route('auth.index')->with('success','Jauns lietotājs pievienots');
    }

}
