<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('Purchase_Id');
            $table->integer('User_Id')->unsigned()->nullable();
            $table->string('Name', 100)->nullable();
            $table->string('DeliveryAddress', 500)->nullable();
            $table->string('PhoneNumber', 12)->nullable();
            $table->string('Email', 50)->nullable();
            $table->date('CreatedAt')->nullable();
            $table->date('UpdatedAt')->nullable();
            $table->integer('Total')->nullable();
            $table->integer('State')->nullable();
            
            $table->foreign('User_Id')->references('User_Id')->on('user');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('purchase');
    }
};
