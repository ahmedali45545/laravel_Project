<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/home');
        }
    }
    function register(Request $req)
    {
        $user=new User;
        $user->name=$req->username;
        $user->email=$req->email;
        $user->role=$req->role;
        $user->password=Hash::make($req->password);
        $req->session()->put('user',$user);
        $user->save();
        return redirect('/');
    }
    public function show(){
        $user=Session::get('user');
        return view('users.show',["data"=>$user]);  
        
    }
    function removeUser()
    {   
        
        
        $user=Session::get('user')['id'];
        User::destroy($user);
        Session::forget('user');
        return redirect('/login');
    }  
    function edit($id){
        $user = User::findorfail($id);
        return view("/users.edit", ["data"=>$user]);
       } 
       function update($id){
        $user = User::findorfail($id);
        $user->name = request("name");
        $user->save();
        return redirect("/users");
    }
}
