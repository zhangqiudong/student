<?php

namespace App\Http\Controllers\Admin;

use DB;
use Hash;
use Carbon\Carbon;
use App\Grade;
use App\Task;
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
        $user->nianji=$request->nianji;
        $user->pro_class=$request->pro_class;
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
    public function show(){
        $result = User::where('is_admin',0);
        $count = $result->count();
        return view('Admin.addnews',compact('count'));
    }

    //上传作业
    public function uploadTask(){
        $result = User::where('is_admin',0);
        $count = $result->count();
        return view('admin.homework_upload',compact('count'));
    }
    public function uploadTask_save(Request $request){
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

//            保存到数据库中
                $this->validate($request,[
                    'nianji'=>'required',
                     'pro_class'=>'required'
                ]);
            $task =new Task;
            $mytime = Carbon :: now();
            $task->nianji = $request->nianji;
            $task->pro_class = $request->pro_class;
            DB::insert('insert into tasks(nianji,pro_class,taskname,created_at)VALUES (?,?,?,?)',[$task->nianji,$task->pro_class,$filename,$mytime->toDateTimeString()]);
                session()->flash('message','作业上传成功');
            //            保存到数据库中

            return '作业上传成功！';
        }

        return '创建成功';
    }

}
