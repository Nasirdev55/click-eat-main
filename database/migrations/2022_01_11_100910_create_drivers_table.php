<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('image');
			$table->string('zip_code');
			$table->string('phone');
			$table->string('licence_number');
			$table->string('driving_licence_expiration');
			$table->string('vehicle_name');
			$table->string('year');
			$table->string('registration_number');
			$table->string('address');
			$table->double('longitude');
			$table->double('latitude');
			$table->boolean('active')->default(0);
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
        Schema::dropIfExists('drivers');
    }
}
