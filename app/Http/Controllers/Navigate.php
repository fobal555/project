<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Navigate extends Controller
{
    function Register() {
        return view("form");
    }
    function Admin(){
        return view("admin");
    }
    function login(){
        return view("login");
    }
    function insert(Request $req){
        $user= new UserData();
        $user->firstname=$req->firstname;
        $user->lastname=$req->lastname;
        $user->birthday=$req->date;
        $user->gender=$req->gender;
        $user->email=$req->email;
        $user->number=$req->number;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect("thank");

    }
    function adminlogin(Request $req){
        if($req->email=="admin@gmail.com" && $req->password=="admin@gmail.com"){
           return redirect("secret_info");
        }
        else{
            return view("admin");
        }
    }
    function secret_info(){
        $users=UserData::all();
        $data=compact("users");
        return view("confidential")->with($data);
    }
    function deleterecord($id){
        $users=UserData::find($id);
        $users->delete();
        return redirect("secret_info");
    }
    function updaterecord($id){
        
        $users=UserData::find($id);
        if(is_null($users)){
            return view("confidential");
        }
        else{
        $data=compact("users");
        return view("update")->with($data);
        }
    }
    function update(Request $req,$id){
        $user=  UserData::find($id);
        $user->firstname=$req->firstname;
        $user->lastname=$req->lastname;
        $user->birthday=$req->date;
        $user->gender=$req->gender;
        $user->email=$req->email;
        $user->number=$req->number;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect("secret_info");

    }
    function customgame(){
        return view("customgames");
    }
    function dice(){
        return view("dice");
    }
    function auth(Request $req){
        $credentials=$req->only('email','password');
        if(Auth::attempt($credentials)){
             return redirect("customgame");
        }
        else{
            return redirect("custom");


        }

    }
    function drum(){
        return view("drum");
    }
}
