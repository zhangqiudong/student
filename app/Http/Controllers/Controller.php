<?php

namespace App\Http\Controllers;
use DB;
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

}
