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
Route::get('/news/list',['as'=>'news_list','uses'=>'Controller@news_list']);
Route::get('/news/{id}/detail',['as'=>'news_detail','uses'=>'Controller@news_detail']);
Route::get('/infos/list',['as'=>'infos_list','uses'=>'Controller@infos_list']);
Route::get('/infos/{id}/detail',['as'=>'infos_detail','uses'=>'Controller@infos_detail']);


Route::get('login',['middleware'=>'guest','as'=>'login','uses'=>'loginController@loginGet']);
Route::post('login', [
    'middleware' => 'guest', 'uses' => 'loginController@loginPost']);
Route::get('logout', [
    'middleware' => 'auth', 'as' => 'logout', 'uses' => 'loginController@logout']);

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
Route::get('/baike/Common_sense/',['as'=>'Common_sense','uses'=>'Controller@Common_sense']);
Route::get('/baike/Common_sense/{id}/detail',['as'=>'Common_sense','uses'=>'Controller@Common_sense_detail']);


Route::get('/baike/Interesting_discovery/',['as'=>'Interesting_discovery','uses'=>'Controller@Interesting_discovery']);
Route::get('/baike/discovery/{id}/detail',['as'=>'Interesting_discovery','uses'=>'Controller@Interesting_detail']);

Route::get('/baike/modern_science/',['as'=>'modern_science','uses'=>'Controller@modern_science']);
Route::get('/baike/modern_science/{id}/detail',['as'=>'modern_science','uses'=>'Controller@modern_science_detail']);

Route::get('/baike/geography/',['as'=>'geography','uses'=>'Controller@geography']);
Route::get('/baike/geography/{id}/detail',['as'=>'geography_detail','uses'=>'Controller@geography_detail']);
//家教辅导
Route::get('/stu_help/',['as'=>'stu_help','uses'=>'Controller@stu_help']);



