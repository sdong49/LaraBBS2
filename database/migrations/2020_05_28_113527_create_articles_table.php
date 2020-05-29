<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration 
{
	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->bigInteger('user_id')->unsigned();
            $table->text('excerpt');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('articles');
	}
}
