<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('doctors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('password');



			$table->timestamps();
			$table->string('governorate');
			$table->string('speciality');
			$table->integer('age');
			$table->string('phone');
			$table->string('gender');
		});
	}

	public function down()
	{
		Schema::drop('doctors');
	}
}
