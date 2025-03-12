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
        Schema::create('category', function (Blueprint $table) {
            $table->string('Category_Id', 10)->primary();
            $table->string('Category_Name', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('category');
    }
};
