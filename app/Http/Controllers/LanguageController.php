<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    //LDMF01
    public function __invoke($locale)
    {
        session(['localization' => $locale]);

        return redirect()->back();
    }
}
