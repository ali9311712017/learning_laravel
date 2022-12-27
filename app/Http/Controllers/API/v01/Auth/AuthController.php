<?php

namespace App\Http\Controllers\API\v01\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @method Post
     * @param Request $request
     */
    public function register(Request $request ){
        $request->validate([
           'name'=>['required'] ,
           'email'=>['required' , 'email','unique:users'],
           'password'=>['required'],
        ]);
    user::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),

    ]);
}
public function login(){

}
}
