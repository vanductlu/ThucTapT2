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
<<<<<<< HEAD:database/migrations/2014_10_12_000000_create_users_table.php
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
=======
        Schema::create('publishing_company', function (Blueprint $table) {
            $table->increments('Publishing_Company_Id');
            $table->string('Publishing_Company_Name', 50)->nullable();
>>>>>>> main:database/migrations/2025_03_09_060439_create_publishing_company_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publishing_company');
    }
};
