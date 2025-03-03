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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->nullable(); // Khóa ngoại đến bảng user_roles
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->rememberToken();
            $table->timestamps();
        
            // Định nghĩa khóa ngoại
            $table->foreign('role_id')->references('id')->on('user_roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
