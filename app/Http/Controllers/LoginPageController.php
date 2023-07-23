<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function loginPage(Request $request){
        // return redirect()->to('dashboard'); 
        return view('dashboard');
    }
}
// resources\views\dashboard.blade.php