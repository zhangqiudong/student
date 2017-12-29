<?php

namespace App\Http\Controllers\Admin;

use DB;
use Hash;
use App\Grade;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
        $result = User::where('is_admin',0);
        $count = $result->count();
        $users = $result->paginate(10);
        return view('Admin.index',compact('users','count'));
    }

    public function destroy(User $user){
        $name = $user->name;
        $user->delete();
        session()->flash('message',$name.'该同学已经删除！');
        return Redirect::back();
    }

    public function create(){
        $result = User::where('is_admin',0);
        $count = $result->count();
        return view('Admin.create',compact('count'));

    }
    public  function store(Request $request){
        $this->validate($request,[
            'id' => 'required|digits:10|unique:users',
        ]);
        $user =new User;
        $user->id=$request->id;
        $user->name=$request->name;
        $user->password=Hash::make($user->id);
        $user->save();
        session()->flash('message',$user->name.'同学添加成功！');
        DB::insert('insert into grades(user_id,math,english,c,sport,think,soft
)VALUES (?,?,?,?,?,?,?)',[$request->id,null,null,null,null,null,null]);
        return Redirect::to('admin');
    }
    public function search(Request $request){

        $result = User::where('name',$request->name);
        $users = $result->get();
        $count = $result->count();
        return view('Admin.search',compact('count','users'));
    }

}
