<?php

namespace App\Http\Controllers\Stu;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
//        return view('stu.home');
        $grade = Auth::user()->grade;
        return view('stu.home',compact('grade'));
    }

    public function edit(){
        return view('stu.edit');
    }
    public function update(Request $request){
      $this->validate($request,[
          'phone'=>'required|digits:11',
          'pro_class'=>'required',
          'email'=>'required|email'
          ]);
      Auth::user()->update($request->all());
      session()->flash('message','个人信息修改成功');
      return Redirect::route('stu_home');
    }
    public function uploadTxt(){
        return view('stu.uploadTxt');
    }
    public function uploadTxt_save(Request $request){
        if ($txt = $request->hasFile('txt')){
            $file = $request->file('txt');
            //判断文件上传过程中是否出错
            if(!$file->isValid()){
                return '文件上传出错！';
            }
            //或者文件夹路径 如果没有则返回false
            $destPath = realpath(public_path('uploads'));
            /**
             * 检查一个文件或目录是否存在
             * @param 文件或文件夹路径
             * @return
             */
            if(!file_exists($destPath)){
                /**
                 * 试图创建指定的目录的路径名.
                 * @param string $pathname 文件或文件夹所在路径.
                 * @param int $mode [optional] 默认情况下，默认的模式为0777(rwxrwxrwx)
                 *         读、写、运行三项权限可以用数字表示，就是r=4,w=2,x=1
                 *         r(Read，读取) w(Write,写入) x(eXecute，执行)
                 * @param bool $recursive [optional] <p>
                 * 允许嵌套目录中指定的路径创造。默认为假
                 * @param resource $context [optional] &note.context-support;
                 * @return bool true on success or false on failure.
                 */
                mkdir($destPath,0755,true);
            }
            /**
             * 返回原始文件名.
             * 这是提取请求的文件已经上传
             * @return string|null 原来的名字
             */
            $filename = $file->getClientOriginalName();
            /**
             * 将文件移动到一个新的位置.
             * @param string $directory 字符串目录目标文件夹
             * @param string $name      字符串名称的新文件名
             * @return 返回文件，一个表示新文件的文件对象
             * @throws FileException if, 如果因为任何原因，文件不能被移动
             */
            if(!$file->move($destPath,$filename)){
                return '保存文件失败！';
            }
            return '文件上传成功！';
        }

        return '创建成功';
    }

    public function down()
    {
        return response()->download(realpath(base_path('public/uploads')).'\test.txt',
            'Laraveldown.txt');
    }


}
