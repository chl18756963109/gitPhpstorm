<?php
/**
 * Created by PhpStorm.
 * User: hbk06
 * Date: 2018/1/16
 * Time: 16:45
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //可以指定表名，不指定表默认为模型的复数
    //protected $table = 'students';
    //关闭自动维护时间戳
    //public $timestamps = false ;
    //允许批量赋值的字段
    protected $fillable = [
        'name','age'
    ];
    //指定不允许批量复制的字段
    //protected $guraded = ['age'];
    //获取当前时间戳
    /*public function getDateFormat()
    {
        return 'U';
    }*/
    //格式化linux时间戳
/*    protected function asDateTime($value)
    {
        return $value;
    }*/

}