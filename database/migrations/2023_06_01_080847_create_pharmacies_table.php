<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmaciesTable extends Migration {

	public function up()
	{
		Schema::create('pharmacies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
            $table->string('password');

			$table->timestamps();
			$table->string('address');
			$table->string('governorate');
			$table->string('phone');
		});
	}

	public function down()
	{
		Schema::drop('pharmacies');
	}
}
