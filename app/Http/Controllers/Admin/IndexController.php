<?php
/**
 * Created by PhpStorm.
 * User: chl
 * Date: 2018/1/3
 * Time: 14:41
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        //return 111;
        return view('admin.index');
    }
}