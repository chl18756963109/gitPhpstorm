@extends('layouts')
@section('header')
    @parent
    儿子的header
@stop

@section('left')
    @parent
    儿子的left
@stop

@section('right')
儿子
{{--<!--模版中输出php变量-->
<p>{{ $name }}</p>
<p>{{ time() }}</p>
<p>{{ date('Y-m-d H:i:s',time()) }}</p>
<p>{{ in_array($name,$arr) ? 'true':'false' }}</p>
<p>{{ isset($name) ? $name:'default' }}</p>
<p>{{ $name1 or 'default'}}</p>
<p>@{{ $name }}</p>
--}}{{--模版中的注释--}}{{--
的right
--}}{{--引入子视图 include--}}{{--
@include('admin.include1',['message'=>'我是错误信息'])--}}
{{--<p>
@if($name == '李四')
    I'm 李四
@elseif($name == '张三')
    I'm 张三
@else
    Who am I ?
@endif
@if(in_array($name,$arr))
    true
@else
    false
@endif
@unless($name !='张三')
    unless是if的取反
@endunless
</p>
<br>
@for($i=0;$i<=3;$i++)
    <p>{{ $i }}</p>
@endfor
<p>
@foreach($student as $value)
    姓名：{{ $value->name }}
    年龄：{{ $value->age }}
    <br>
@endforeach
</p>

<p>
@forelse( $student as $v)
    {{ $v->age }}
@empty
    <p>没找到记录</p>
@endforelse
</p>--}}

{{--通过url--}}
<a href="{{ url('url') }}">main2</a>
{{--通过action跳转--}}
<a href="{{ action('Admin\ArticleController@url') }}"> action()</a>
{{--通过route跳转--}}
<a href="{{ route('mian2') }}">route()</a>
@stop

@section('footer')
    @parent
    儿子的footer
@stop
