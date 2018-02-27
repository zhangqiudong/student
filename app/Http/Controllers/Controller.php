<?php

namespace App\Http\Controllers;
use App\Http\Requests\Request;
use DB;
use route;
use App\News;
use App\Info;
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
        $infos = DB::table('infos')->get();
        return view('welcome',compact('news','infos'));
    }
    public function aboutus(){
        return view('service.aboutus');
    }
    public function ad_service(){
    return view('service.ad_service');
    }
    public function cooperation(){
        return view('service.cooperation');
    }
    public function share(){
        return view('service.share');
    }
    public function mianze(){
        return view('service.mianze');
    }
    public function contact(){
        return view('service.contactus');
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
    public function infos_list(){
        $infos = DB::table('infos')->orderBy('created_at','desc')->get();
        return view('infos.list',compact('infos'));
    }
    public function infos_detail($id){

        $infos = DB::table('infos')->where('id',$id)->get();
        return view('infos.detail',compact('infos'));
    }
    //作文
    public function zuowen(){

        $compositions = DB::table('compositions')->orderBy('date','desc')->get();
        return view('zuowen',compact('compositions'));
    }
    public function zuowen_detail($id){
        $zuowen = DB::table('compositions')->where('id',$id)->get();
        return view('zuowen_detail',compact('zuowen'));

    }
    //父母课堂
    public function par_know(){
        $items = DB::table('kwdgforparents')->orderBy('date','desc')->get();
        return view('par_know',compact('items'));
    }
    public function par_know_detail($id){
        $items = DB::table('kwdgforparents')->where('id',$id)->get();
        return view('par_info',compact('items'));

    }

    //百科
    public function Common_sense(){
        $items = DB::table('baikes')->where("category",'身边的常识')->orderBy('date','desc')->get();
        return view('baike.shenbian',compact('items'));
    }
    public function Common_sense_detail($id){
        $items = DB::table('baikes')->where("category",'身边的常识')->where('id',$id)->first();
        return view('baike.detail',compact('items'));

    }
    public function Interesting_discovery(){
        $items = DB::table('baikes')->where("category",'趣味科学知识')->orderBy('date','desc')->get();
        return view('baike.kexue',compact('items'));
    }
    public function Interesting_detail($id){
        $items = DB::table('baikes')->where("category",'趣味科学知识')->where('id',$id)->first();
        return view('baike.detail',compact('items'));

    }
    public function modern_science(){
        $items = DB::table('baikes')->where("category",'现代科学技术')->orderBy('date','desc')->get();
        return view('baike.xiandai',compact('items'));
    }
    public function modern_science_detail($id){
        $items = DB::table('baikes')->where("category",'现代科学技术')->where('id',$id)->first();
        return view('baike.detail',compact('items'));

    }
    public function geography(){
        $items = DB::table('baikes')->where("category",'地理知识')->orderBy('date','desc')->get();
        return view('baike.dili',compact('items'));
    }
    public function geography_detail($id){
        $items = DB::table('baikes')->where("category",'地理知识')->where('id',$id)->first();
        return view('baike.detail',compact('items'));

    }
    //家教辅导
    public function stu_help(){
        return view('stu_help');
    }
    //儿童疾病
    public function health_list($category){
        if ($category == "breath"){ $category ="呼吸系统";}
        else if ($category == "digest"){ $category ="消化系统";}
        else if ($category == "micturition"){ $category ="泌尿系统";}
        else if ($category == "nerve"){ $category ="神经系统";}
        else if ($category == "shin"){ $category ="皮肤护理";}
        else if ($category == "transmit_illness"){ $category ="传染疾病";}
        else if ($category == "diseases_of_eye"){ $category ="小儿发热";}
        else if ($category == "Dental_disease"){ $category ="齿科疾病";}
        else if ($category == "E_N_T"){ $category ="耳鼻喉科";}
        else if ($category == "Cardiovascular_disease"){ $category ="心血管病";}
        else if ($category == "Psychology"){ $category ="心理健康";}
        else if ($category == "Child_Medication"){ $category ="儿科用药";}
        else if ($category == "Newbaby_disease"){ $category ="新生儿疾病";}
        else if ($category == "endocrine"){ $category ="内分泌系统";}
        else if ($category == "family_care"){ $category ="家庭护理";}
        else if ($category == "Pediatric_surgery"){ $category ="小儿外科";}
        else if ($category == "baby_safe"){ $category ="宝贝安全";}
        else { $category ="其他症状";}
        $items = DB::table('diseases')->where("category",$category)->orderBy('date','desc')->get();
        return view('disease',compact('items'));

    }
    //详情
    public function health_detail($category,$id){
        $items = DB::table('diseases')->where("category",$category)->where('id',$id)->first();
        return view('diseases_instruction',compact('items'));

    }

//才艺展示
    public function caiyi_show(){
        return view('caiyi');

    }

}
