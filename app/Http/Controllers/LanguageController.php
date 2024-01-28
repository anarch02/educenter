<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function change($lang)
    {
        session(['language' => $lang]);
        $status = App::setLocale($lang);
        
        return redirect()->back();
    }
}
