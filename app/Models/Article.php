<?php
/**
 * Created by PhpStorm.
 * User: chl
 * Date: 2018/1/15
 * Time: 10:53
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $table = 'article';
    protected $primaryKey = 'id';
    /**文章对应作者信息*/
    public function getAuthor()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    /**文章对应的浏览数*/
    public function getViews()
    {
        return $this->hasOne('App\Models\View','art_id');
    }
    /**文章对应的分类*/
    public function getCategories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    /**
     * 整理文章表数据,用于前端展示
     * @param $allData
     * @param $page
     * @return mixed
     */
    public static function sortData($allData,$page = 'Admin')
    {
        foreach ($allData as $key => $item) {
            $allData[$key]['author'] = $item['get_author']['name'];
            $allData[$key]['views']  = $item['get_views']['view_num'];
            if (!empty($item['get_tags'])) {
                $allData[$key]['tags'] = implode(',',array_column($item['get_tags'], 'tag_name'));
            } else {
                $allData[$key]['tags'] = '';
            }

            if (!empty($item['get_categories'])) {
                $allData[$key]['categories'] = implode(',',array_column($item['get_categories'], 'cate_name'));
            } else {
                $allData[$key]['categories'] = '';
            }

            if ($page != 'Admin') {
                $parser = new Parsedown();
                $allData[$key]['content'] = cut_html_str($parser->text($item['content']),100);
            }

        }
        return $allData;
    }
}