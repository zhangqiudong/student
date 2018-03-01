<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Register;

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

    //验证码
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    public function registerGet(){
        return view('register');
    }

    public function registerPost(Request $request){
//        $this->validate($request,students::rules());
//        $mobile = $request->get('mobile');
//        $nickname = $request->get('nickname');
//        $password = $request->get('password');

          $code =  $request->Mcode;

        if(Session::get('milkcaptcha')==$code){
            $register = new Register();
            $register->nickname= $request->nickname;;
            $register->phone=$request->mobile;
            $register->password= $request->password;

            $register->save();
            session()->flash('message','注册成功!');
            return Redirect::route('login');
        }
        else{
//
//            $register = new Register();
//            $register->nickname= $request->nickname;
//            $register->phone=$request->mobile;
//            $register->password= $request->password;
//
//            $register->save();
//            session()->flash('message','注册成功!');
            return Redirect::route('register');
        }

    }
}
