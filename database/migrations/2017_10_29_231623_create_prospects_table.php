<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('website')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('order')->nullable();
            $table->string('phone');
            $table->text('comments');
            $table->text('sale_proposal');
            $table->text('tracing')->nullable();
            $table->boolean('is_client')->default(0);

            $table->dateTime('alert_date')->nullable(); 
            $table->string('alert_subject')->nullable();

            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');

            $table->unsignedInteger('updated_by');
            $table->foreign('updated_by')->references('id')->on('users');

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
        Schema::dropIfExists('prospects');  
    }
}
