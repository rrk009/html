<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvezplaceTrendingForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evezplace_trending_forums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('forum_id')->unsigned()->nullable();
			$table->foreign('forum_id')->references('id')->on('forums');
			$table->boolean('is_show_evezplace')->default(0);
			$table->integer('evezown_section_id')->unsigned()->nullable();
			$table->foreign('evezown_section_id')->references('id')->on('evezown_sections');
			$table->integer('priority')->unsigned()->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evezplace_trending_forums');
	}

}
