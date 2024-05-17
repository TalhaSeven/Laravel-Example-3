<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkAuth')->only('login','loginpost');
        $this->middleware('checkAuth')->except(['login']);
    }
    public function login(Request $request){

        return view("login");
    }
    public function loginpost(LoginRequest $request){
     
        return view("login");
    }

}
