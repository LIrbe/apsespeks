<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Lietotāju kontrolētājs
    |--------------------------------------------------------------------------
    |
    | Šis kontrolētājs ir paredzēts visām darbībām ar lietotāju datiem, 
    | izņemot pilnvarošanu vai jaunu reģistrāciju.
    |
    */

    //AMF08
    public function index() {
        $users = User::all();
        return view('auth.index', compact('users'));
    }

    //AMF09
    public function destroy(string $id) {
        $user = User::find($id);
        if($user->main == 1){
            return redirect()->route('auth.index')->with('error', 'validation.main_admin');
        }
        else if(auth()->user()->id == $id){
            return redirect()->route('auth.index')->with('error', 'validation.yourself');
        }
        else{
            $user->delete();
            return redirect()->route('auth.index')->with('success', 'Lietotājs veiksmīgi dzēsts');
        }
    }
}
