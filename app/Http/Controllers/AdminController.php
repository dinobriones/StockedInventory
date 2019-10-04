<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $redirectTo = '/home';

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            // dd($data);
        return view('home');
    }
        return view('admin.admin_login');
    }
}
