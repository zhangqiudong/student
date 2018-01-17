<?php

namespace App\Http\Controllers;
use App\Http\Requests\Request;
use DB;
use route;
use App\News;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function home(){
        $news = DB::table('news')->where('author','教务处')->get();
        return view('welcome',compact('news'));
    }
    public function help(){

        return view('help');
    }
    public function news_list(){
        $news = DB::table('news')->orderBy('created_at','desc')->get();
        return view('news.list',compact('news'));
    }
    public function news_detail($id){

        $news = DB::table('news')->where('id',$id)->get();
        return view('news.detail',compact('news'));
    }


}
