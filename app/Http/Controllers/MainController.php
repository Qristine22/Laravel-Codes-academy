<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function changeLocale($locale) {
        if (!in_array($locale, ['en', 'am', 'ru'])) {
            abort(404);
        }
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

}