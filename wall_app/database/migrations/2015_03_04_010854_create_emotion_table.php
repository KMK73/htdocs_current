<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmotionTable extends Migration {

	public function up()
	{
		Schema::create('emotion', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
		});
	}

	public function down()
	{
		Schema::drop('emotion');
	}
}