<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginGet(){
        return view('login');
    }

    //登陆响应
    public function loginPost(Request $request){
        $this->validate($request,students::rules());
        $id = $request->get('id');
        $password = $request->get('password');
        if(Auth::attempt(['id'=>$id,'password'=>$password],$request->get('remember'))){
           if (!Auth::user()->is_admin){
                return Redirect::route('sut_home');
            }
            else{
               return Redirect::action('Admin\AdminController@index');
            }
        }
        else{
            return Redirect::route('login')
                ->withInput()
                ->withErrors('学号或者密码不正确，请重试');
        }

    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return Redirect::route('login');
    }
}
