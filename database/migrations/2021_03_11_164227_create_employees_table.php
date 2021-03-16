<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code');
            $table->string('identification_number',50);
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->date('birthday');
            $table->string('home_address',50);
            $table->string('cell_phone',20);
            $table->string('email');
            $table->date('start_date');
            $table->string('genre',1);
            $table->string('status',1)->default('A');

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
        Schema::dropIfExists('employee');
    }
}
