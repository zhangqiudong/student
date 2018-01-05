<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\News;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
        public function addnews(){

        $result = User::where('is_admin',0);
        $count = $result->count();
        return view('Admin.addnews',compact('count'));

    }

    public function upload_news(Request $request){

        $new= new News;
        $new->title= $request->title;
        $new->content=$request->contents;
        $new->link= $request->link;
        $new->date= $request->date;
        $new->author= $request->author;
        $new->save();
//        DB::insert('insert into news(title,content,link,date,author)VALUES (?,?,?,?,?,?,?)',[$new->title,$new->content,$new->link,$new->date,$new->author]);
        session()->flash('message','新闻添加成功!');
        return Redirect::back();

    }

}
