<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogModuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_categories', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();
		});

		Schema::create('blogs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('blog_category_id');
			$table->unsignedInteger('user_id');
			$table->string('title');
			$table->text('content');
			$table->string('image')->nullable();
			$table->integer('views')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::create('blog_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('blog_id');
			$table->string('name');
			$table->string('email');
			$table->string('website')->nullable();
			$table->text('comment');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//take backup before dropping table
		$table = 'blog_comments';
		Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
		Schema::drop('blog_comments');

		$table = 'blogs';
		Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
		Schema::drop('blogs');

		$table = 'blog_categories';
		Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
		Schema::drop('blog_categories');
	}

}
