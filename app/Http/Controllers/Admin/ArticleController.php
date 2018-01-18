<?php
/**
 * Created by PhpStorm.
 * User: chl
 * Date: 2018/1/15
 * Time: 10:23
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function index()
    {
        $data['paginate'] = Article::orderBy('create_at','desc')
            ->with('getAuthor')->with('getTags')->with('getCategories')->with('getViews')->paginate(15);
        $data['article'] = Article::sortData($data['paginate']->toArray()['data']);
        return view('admin.article.index',$data);
    }
    public function query()
    {
        //使用查询构造器更新表数据返回受影响的行数
        //$num = DB::table('tq_exam_type')->where('id',1)->update(['type_name'=>'你说的222']);
        //自增
        //$num = DB::table('tq_exam_type')->increment('sort',3);
        //自减
        //$num = DB::table('tq_exam_type')->where('id','>=',2)->decrement('sort',1,['type_name'=>'laravel']);
        //使用查询构造器删除数据
        //$num = DB::table('tq_exam_type')->where('id',1)->delete();
        // DB::table('tq_exam_type')->truncate();
         /*$bool = DB::table('tq_exam_type')->insert(
             [
                 ['id'=>1001,'type_name'=>'python','sort'=>12],
                 ['id'=>1002,'type_name'=>'hello word','sort'=>0]
             ]
         );*/
        //获取所有数据
        //$users = DB::table('tq_exam_type')->get();
        //获取第一条数据
        //$rs = DB::table('tq_exam_type')->orderBy('id','desc')->first();
        //为返回的collection指定一个自定义的键列 pluck(value,keys)
        //$rs = DB::table('tq_exam_type')->whereRaw('id >= ? and sort >= ? ',[1,23])->pluck('type_name','id');
        //$rs = DB::table('tq_exam_type')->select('id','sort')->get()->pluck('sort','id');
        //chunk 必须和orderBy 连用 每次检索一段结果，用于处理上千的数据库记录
        /* echo '<pre>';
         DB::table('tq_exam_type')->orderBy('id')->chunk(2,function ($rs){
            var_dump($rs);
            if(1)
            {
                return false;   //结束查询
            }

        });*/
        //聚合函数
        //$rs = DB::table('tq_exam_type')->count();
        //$rs = DB::table('tq_exam_type')->max('sort');
        //$rs = DB::table('tq_exam_type')->min('id');
        //$rs = DB::table('tq_exam_type')->where('id',1)->avg('sort');
        //$rs = DB::table('tq_exam_type')->whereRaw('id >= ? and sort >= ? ',[1,23])->avg('sort');
        //$rs = DB::table('tq_exam_type')->where('id','>',1)->sum('sort');
        //ORM
        //查询所有的数据返回一个集合
        //$rs = Student::all();
        //根据主键查找一条 返回一个对象
        //$rs = Student::find(1);
        //根据主键查找，没有找到返回一个错误页面
        //$rs = Student::findOrFail(1);
        //获取所有数据，返回一个集合
        //$rs = Student::get();
        //$rs = Student::where('id','>',1002)->orderBy('id','desc')->first();
        //$rs = Student::where('id','>',1001)->orderBy('id','desc')->get();
        /*echo '<pre>' ;
         Student::chunk(2,function ($rs){
            var_dump($rs);
        });*/
        //$rs = Student::count();
        //$rs = Student::max('id');
        //$rs = Student::min('age');
        //$rs = Student::where('age','>',0)->avg('age');
        //$rs = Student::where('id' ,'>',1002)->sum('age');
        /*$student = new Student();
        $student->name = '王小红';
        $student->age = 25;
        $rs = $student->save();*/
        //$rs = Student::find(1007);
        /*Student::create(
            ['name'=>'李小死龙','age'=>71]
        );*/
        //以属性查找用户，没有找到则在数据库创建，并返回新的实例
        /*$rs = Student::firstOrCreate(
            ['name'=>'李小龙dsds']
        );*/
        //以属性查找用户 没有找到创建新的实例调用save可以保存
        /*$rs = Student::firstOrNew(
            ['name'=>'李小龙dss']
        )->save();*/
        //$rs = Student::get();
        /*$student = Student::find(1004);
        $student->name = 'qq企业22';
        $rs = $student->save();*/
        //ORM跟新，返回受影响的行数
        //$rs = Student::where('id',1004)->update(['name'=>'李忠堂']);
        //ORM删除,返回受影响行数
        //$rs = Student::where('id',1004)->delete();
        //通过模型删除 返回bool值
        //$student = Student::find(1005);
        //$rs = $student->delete();
        //通过主键删除 返回受影响的行数
        //$rs = Student::destroy([1008,1009]);
        //dd($rs);
        //$rs = Student::find(1002);
        //dd($rs);
        //return view('mian2');
        //$student = Student::get();
        /*$student = [];
        return view('main3',['name'=>'张三','arr'=>['张三','李四'],
            'message'=>' 你的名字','student'=>$student
            ]);*/
        return view('main3');

    }

    public function url()
    {
        return view('mian2');
    }
    public function form(Request $request)
    {
        //获取请求参数
        //$name = $request->input('name','里斯');
        //echo empty($request->has('name')) ?  '里斯':$request->input('name');
        //$name = $request->all();
        //判断请求类型
        //$name = $request->method();
        //$name = empty($request->isMethod('get')) ? false : true;
        //$name =11;
        //$name = $request->is('article/*');
        //$name = $request->url();
        //http request session
        //$request->session()->put('name','掌声2');
        //$name = $request->session()->get('name');
        //dd($name);
        //session() 调用session
        //session()->put('key1',222);
        //Session类 调用session
        //Session::put('key2',333);
        //Session::put(['key3'=>'value3']);
        Session::push('student',123);
        Session::push('student','name');
    }
    public function session(Request $request)
    {
        //var_dump($_SESSION);
        //$name = $request->session()->get('name');
        //dd($name);
        //echo session()->get('key1');
        $name = Session::pull('student','default');
        var_dump($name);
        //dd($name);
        //echo Session::get('key3','default');
    }
}