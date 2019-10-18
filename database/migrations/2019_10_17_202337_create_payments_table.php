<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->string('patient', 50);
            $table->integer('qtdeProcedure');
            $table->date('dateProcedure');
            $table->integer('totalParcels');
            $table->integer('parcelNumber');
            $table->integer('collabParcels');
            $table->double('totalAmount', 10, 2);
            $table->double('paymentAmount', 10, 2);
            $table->double('parcelAmount',10,2);
            $table->string('status');

            $table->text('obs',300)->nullable();


            $table->integer('procedure_id')->unsigned();
            $table->foreign('procedure_id')->references('id')->on('procedures');

            $table->integer('collaborator_id')->unsigned();
            $table->foreign('collaborator_id')->references('id')->on('collaborators');

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
        Schema::dropIfExists('payments');
    }
}
