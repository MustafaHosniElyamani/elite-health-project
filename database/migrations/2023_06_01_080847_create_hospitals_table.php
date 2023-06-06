<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration {

	public function up()
	{
		Schema::create('hospitals', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
            $table->string('password');

			$table->timestamps();
			$table->string('address');
			$table->string('specialties');
			$table->string('governorate');
			$table->string('phone');
		});
	}

	public function down()
	{
		Schema::drop('hospitals');
	}
}
