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
        Schema::create('user_role', function (Blueprint $table) {
            $table->increments('Role_Id');
            $table->string('Role_Name', 10);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('user_role');
    }
};
