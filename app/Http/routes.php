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
Route::get('stu/home', [
    'as' => 'stu_home', 'uses' => 'Stu\StudentController@home']);
Route::get('stu/edit', [
    'as' => 'stu_edit', 'uses' => 'Stu\StudentController@edit']);
Route::post('stu/update', [
    'as' => 'stu_update', 'uses' => 'Stu\StudentController@update']);
Route::get('stu/uploadTxt/', [
    'as' => 'stu_uploadTxt', 'uses' => 'Stu\StudentController@uploadTxt']);
Route::post('stu/uploadTxt_save/', [
    'as' => 'stu_uploadTxt_save', 'uses' => 'Stu\StudentController@uploadTxt_save']);
Route::get('stu/downloadTask/', [
    'as' => 'downloadTask', 'uses' => 'Stu\StudentController@down']);


//admin operation管理员操作
Route::get('admin/grade',['as'=>'grade_list','uses'=>'Admin\GradeController@index']);
Route::post('admin/upload_grade',['uses'=>'Admin\GradeController@upload_grade']);
Route::resource('admin','Admin\AdminController');


Route::post('admin/uploadnews',['uses'=>'Admin\NewsController@addnews']);
Route::post('admin/uploadnews',['uses'=>'Admin\NewsController@upload_news']);

Route::get('Admin/search',['as'=>'search','uses'=>'Admin\adminController@search']);

