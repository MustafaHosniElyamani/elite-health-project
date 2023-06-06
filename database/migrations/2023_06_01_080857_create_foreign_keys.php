<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('follow_ups', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('follow_ups', function(Blueprint $table) {
			$table->dropForeign('follow_ups_patient_id_foreign');
		});
	}
}
