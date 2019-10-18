<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('collaborators', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 50);
            $table->string('surname',50);
            $table->double('percent', 4, 2);
            $table->double('parcelPercent', 4, 2);
            $table->string('email',50);

            $table->text('obs',300)->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('collaborators');
    }
}
