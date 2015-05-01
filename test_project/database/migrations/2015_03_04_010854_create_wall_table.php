<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWallTable extends Migration {

	public function up()
	{
		Schema::create('wall', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->text('body');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('emotion_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('wall');
	}
}