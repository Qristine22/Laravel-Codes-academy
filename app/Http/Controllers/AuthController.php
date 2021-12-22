<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\User;

class AuthController extends Controller
{
    public function registerProgress(){
        // User::create([
        //     'login' => 'admin',
        //     'password' => bcrypt(''),
        //     'is_admin' => '1',
        // ]);
        return redirect()->back();
    }


    public function loginProgress(Request $request){
        $data = $request->validate([
            'login' => ['required', 'min:4', 'max:10'],
            'password' => ['required', 'min:4']
        ]);
        if(auth('web')->attempt($data)){
            return redirect(route('home'));
        }
        else{
            return redirect()->back();
        }
    }



    public function logout(){
        auth("web")->logout();
        return redirect(route('home'));
    }
}
