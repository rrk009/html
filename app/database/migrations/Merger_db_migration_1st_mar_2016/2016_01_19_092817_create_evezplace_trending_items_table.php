<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvezplaceTrendingItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evezplace_trending_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 100)->nullable();
			$table->string('description', 255)->nullable();
			$table->string('link', 255)->nullable();
			$table->integer('image_id')->unsigned()->index()->nullable();
			$table->foreign('image_id')->references('id')->on('images');
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
		Schema::drop('evezplace_trending_items');
	}

}
