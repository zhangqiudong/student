<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',['as'=>'home','uses'=>'Controller@home']);
Route::get('/help',['as'=>'help','uses'=>'Controller@help']);

//footer
Route::get('/aboutus',['as'=>'aboutus','uses'=>'Controller@aboutus']);
Route::get('/ad_service',['as'=>'ad_service','uses'=>'Controller@ad_service']);
Route::get('/cooperation',['as'=>'cooperation','uses'=>'Controller@cooperation']);
Route::get('/share',['as'=>'share','uses'=>'Controller@share']);
Route::get('/mianze',['as'=>'mianze','uses'=>'Controller@mianze']);
Route::get('/contact',['as'=>'contact','uses'=>'Controller@contact']);

Route::get('/news/list',['as'=>'news_list','uses'=>'Controller@news_list']);
Route::get('/news/{id}/detail',['as'=>'news_detail','uses'=>'Controller@news_detail']);
Route::get('/infos/list',['as'=>'infos_list','uses'=>'Controller@infos_list']);
Route::get('/infos/{id}/detail',['as'=>'infos_detail','uses'=>'Controller@infos_detail']);

//登录注册
Route::get('login',['middleware'=>'guest','as'=>'login','uses'=>'loginController@loginGet']);
Route::post('login', ['middleware' => 'guest', 'uses' => 'loginController@loginPost']);
Route::get('logout', ['middleware' => 'auth', 'as' => 'logout', 'uses' => 'loginController@logout']);

Route::post('registerPost', [ 'middleware'=>'guest','uses' => 'loginController@registerPost']);
Route::get('register',['middleware'=>'guest','as'=>'register','uses'=>'loginController@registerGet']);
//生成验证码
Route::get('/index/captcha/{tmp}', 'loginController@captcha');
//sudent operation学生操作
//下载作业
Route::get('stu/download/', [
    'as' => 'downloadTask', 'uses' => 'Stu\StudentController@down_homework']);
Route::get('stu/home', [
    'as' => 'stu_home', 'uses' => 'Stu\StudentController@home']);
Route::get('stu/edit', [
    'as' => 'stu_edit', 'uses' => 'Stu\StudentController@edit']);
Route::post('stu/update', [
    'as' => 'stu_update', 'uses' => 'Stu\StudentController@update']);
//上传文章
//Route::get('stu/uploadTxt/', [
//    'as' => 'stu_uploadTxt', 'uses' => 'Stu\StudentController@uploadTxt']);
//Route::post('stu/uploadTxt_save/', [
//    'as' => 'stu_uploadTxt_save', 'uses' => 'Stu\StudentController@uploadTxt_save']);
//admin operation管理员操作
//作业上传
Route::get('admin/upload_task/',['uses'=>'Admin\AdminController@uploadTask']);
Route::post('admin/upload_task_save/', [
    'as' => 'admin_uploadTask_save', 'uses' => 'Admin\AdminController@uploadTask_save']);

Route::get('admin/grade',['as'=>'grade_list','uses'=>'Admin\GradeController@index']);
Route::post('admin/upload_grade',['uses'=>'Admin\GradeController@upload_grade']);
Route::resource('admin','Admin\AdminController');

//添加通知
Route::post('admin/uploadnews',['uses'=>'Admin\NewsController@addnews']);
Route::post('admin/uploadnews_save',['uses'=>'Admin\NewsController@upload_news']);


Route::get('Admin/search',['as'=>'search','uses'=>'Admin\adminController@search']);

// 作文composition
Route::get('/composition/',['as'=>'composition','uses'=>'Controller@zuowen']);
Route::get('/youxiuzuowen/{id}/',['as'=>'zuowen_detail','uses'=>'Controller@zuowen_detail']);
//父母课堂
Route::get('/par_know/',['as'=>'par_know','uses'=>'Controller@par_know']);
Route::get('/par_know/{id}/detail',['as'=>'par_know_detail','uses'=>'Controller@par_know_detail']);

//百科
Route::group(['prefix' => 'baike'], function () {
    Route::get('Common_sense/',['as'=>'Common_sense','uses'=>'Controller@Common_sense']);
    Route::get('Common_sense/{id}/detail',['as'=>'Common_sense','uses'=>'Controller@Common_sense_detail']);
    Route::get('Interesting_discovery/',['as'=>'Interesting_discovery','uses'=>'Controller@Interesting_discovery']);
    Route::get('discovery/{id}/detail',['as'=>'Interesting_discovery','uses'=>'Controller@Interesting_detail']);
    Route::get('modern_science/',['as'=>'modern_science','uses'=>'Controller@modern_science']);
    Route::get('modern_science/{id}/detail',['as'=>'modern_science','uses'=>'Controller@modern_science_detail']);
    Route::get('geography/',['as'=>'geography','uses'=>'Controller@geography']);
    Route::get('geography/{id}/detail',['as'=>'geography_detail','uses'=>'Controller@geography_detail']);
});
//家教辅导
Route::get('/stu_help/',['as'=>'stu_help','uses'=>'Controller@stu_help']);
//儿童疾病
Route::group(['prefix' => 'health'], function () {
    Route::get('{category}/',['as'=>'breath','uses'=>'Controller@health_list']);
//    Route::get('digest/',['as'=>'digest','uses'=>'Controller@digest']);
//    Route::get('micturition/',['as'=>'micturition','uses'=>'Controller@micturition']);
//    Route::get('nerve/',['as'=>'nerve','uses'=>'Controller@nerve']);
//    Route::get('shin/',['as'=>'shin','uses'=>'Controller@shin']);
//    Route::get('transmit_illness/',['as'=>'transmit_illness','uses'=>'Controller@transmit_illness']);
//    Route::get('fever/',['as'=>'fever','uses'=>'Controller@fever']);
//    Route::get('diseases_of_eye/',['as'=>'diseases_of_eye','uses'=>'Controller@diseases_of_eye']);
//    Route::get('Dental_disease/',['as'=>'Dental_disease','uses'=>'Controller@Dental_disease']);
//    Route::get('E_N_T/',['as'=>'E_N_T','uses'=>'Controller@E_N_T']);
//    Route::get('Cardiovascular_disease/',['as'=>'Cardiovascular_disease','uses'=>'Controller@Cardiovascular_disease']);
//    Route::get('Psychology/',['as'=>'Psychology','uses'=>'Controller@Psychology']);
//    Route::get('Child_Medication/',['as'=>'Child_Medication','uses'=>'Controller@Child_Medication']);
//    Route::get('Newbaby_disease/',['as'=>'Newbaby_disease','uses'=>'Controller@Newbaby_disease']);
//    Route::get('endocrine/',['as'=>'endocrine','uses'=>'Controller@endocrine']);
//    Route::get('family_care/',['as'=>'family_care','uses'=>'Controller@family_care']);
//    Route::get('Pediatric_surgery/',['as'=>'Pediatric_surgery','uses'=>'Controller@Pediatric_surgery']);
//    Route::get('else/',['as'=>'else','uses'=>'Controller@else']);
//    Route::get('baby_safe/',['as'=>'baby_safe','uses'=>'Controller@baby_safe']);
//详细介绍/health/消化系统/141/instruction
    Route::get('/{category}/{id}/instruction',['as'=>'health_detail','uses'=>'Controller@health_detail']);
});

//才艺展示
Route::group(['prefix' => 'caiyi'], function () {
    Route::get('{category}/',['as'=>'caiyi','uses'=>'Controller@caiyi_show']);
    Route::get('/{category}/{id}/describe',['as'=>'caiyi_detail','uses'=>'Controller@caiyi_detail']);
});


