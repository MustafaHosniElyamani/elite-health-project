<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration {

	public function up()
	{
		Schema::create('patients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('password');
			$table->timestamps();
			$table->string('phone');
			$table->integer('age');
			$table->string('gender');
			$table->string('governorate');
		});
	}

	public function down()
	{
		Schema::drop('patients');
	}
}
