<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('article_id');
            $table->softDeletes();
            $table->timestamps();
            $table->string('title',200)->default('')->comment('文章标题');
            $table->text('content')->default('')->comment('文章内容');
            $table->integer('user_id')->default(0)->comment('作者的ID');
            $table->integer('read_status')->default(0)->comment('0表示未读,1表示已读');
            $table->integer('desc')->default(0)->comment('文章排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
