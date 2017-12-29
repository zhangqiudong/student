<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Middleware\isAdmin;
use Illuminate\Http\Request;
use App\Grade;
use Redirect;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
   public function __construct()
   {
       $this->middleware('admin');
   }
   public function index(){
       $result = User::where('is_admin',0);
       $users = $result->get();
       $count = $result->count();
       return view('Admin.list',compact('count','users'));
   }
    public function upload_grade(Request $request){
        $this->validate($request,Grade::rules());

        $grade= Grade::where('user_id',$request->user_id)->first();
        $grade->math= $request->math;
        $grade->c=$request->c;
        $grade->sport= $request->sport;
        $grade->english= $request->enhlish;
        $grade->think= $request->think;
        $grade->soft= $request->soft;
        $grade->save();
        session()->flash('message','成绩更新成功!');
        return Redirect::back();
    }


}
