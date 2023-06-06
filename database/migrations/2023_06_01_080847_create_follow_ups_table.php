<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowUpsTable extends Migration {

	public function up()
	{
		Schema::create('follow_ups', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id')->unsigned();
			$table->string('name');
			$table->text('reply');
			$table->string('file');
			$table->text('message');
		});
	}

	public function down()
	{
		Schema::drop('follow_ups');
	}
}
