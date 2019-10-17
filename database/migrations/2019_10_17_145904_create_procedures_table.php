<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->decimal('value',8,2);
            $table->decimal('collabValue',8,2);

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->

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
        Schema::dropIfExists('procedures');
    }
}
