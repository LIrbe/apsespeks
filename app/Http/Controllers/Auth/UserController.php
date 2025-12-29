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
    public function index() {
        $users = User::all();
        return view('auth.index', compact('users'));
    }
}
