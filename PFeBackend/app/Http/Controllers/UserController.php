<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function signup(Request $request){
            // $request->validate([
            //     'name'=>'required|max:100|unique:users',
            //     'prenom'=>'required|max:100|unique:users',
            //     'email'=>'required|max:100|unique:users',
            //     'password'=>'required|max:100',

            // ]);
            // $request->validate([
            //     'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            // ]);
            $user=new User;
            $user->name=$request->input('name');
            $user->prenom=$request->input('prenom');
            // $user->image=$request->file('file')->store('images');
            $user->email=$request->input('email');
            $user->password=Hash::make($request->input('password'));
            $user->save();
            return $user;
            // return $request->input();
    }
    function login(Request $request){
        // $request->validate([
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);
        $user=User::where('email',$request->email)->first();
        if(!$user || !hash::check($request->password,$user->password)){
            return ["error"=>"email or password incorrect"];
        }
        return $user;

    }
}
