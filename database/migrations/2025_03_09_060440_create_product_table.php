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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('Product_Id');
            $table->string('Category_Id', 10)->nullable();
            $table->string('SKU', 15)->nullable();
            $table->string('Name', 100)->nullable();
            $table->integer('Publishing_Company_Id')->unsigned()->nullable();
            $table->string('Author', 100)->nullable();
            $table->integer('Price')->nullable();
            $table->integer('Quantity')->nullable();
            $table->string('Description', 1500)->nullable();
            $table->date('Date')->nullable();
            $table->string('Avatar', 30)->nullable();
            
            $table->foreign('Category_Id')->references('Category_Id')->on('category');
            $table->foreign('Publishing_Company_Id')->references('Publishing_Company_Id')->on('publishing_company');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product');
    }
};
