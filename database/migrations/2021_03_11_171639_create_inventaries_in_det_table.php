<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariesInDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaries_in_det', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventary_in_id');
            $table->string('article_buyed');
            $table->decimal('price_article_buyed',8,2);
            $table->string('status',1)->default('A');
            $table->timestamps();

            $table->foreign('inventary_in_id')->references('id')->on('inventaries_in');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventary_in_det');
    }
}
