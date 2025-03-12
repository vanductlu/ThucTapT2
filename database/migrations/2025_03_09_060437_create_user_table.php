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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('User_Id');
            $table->unsignedInteger('User_Role');  // Chắc chắn cột này là unsigned
            $table->string('Email', 50)->unique();
            $table->string('Password', 10000)->nullable();
            $table->string('Last_Name', 100)->nullable();
            $table->string('First_Name', 100)->nullable();
            $table->string('Address', 255)->nullable();
            $table->string('Phonenumber', 12)->nullable();
    
            // Khóa ngoại
            $table->foreign('User_Role')->references('Role_Id')->on('user_role')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
