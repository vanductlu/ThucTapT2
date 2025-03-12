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
        Schema::create('purchasedetail', function (Blueprint $table) {
            $table->integer('Purchase_Id')->unsigned();
            $table->integer('Product_Id')->unsigned();
            $table->integer('Quantity')->nullable();
            $table->integer('TotalAmount')->nullable();
            
            $table->primary(['Purchase_Id', 'Product_Id']);
        
            $table->foreign('Purchase_Id')->references('Purchase_Id')->on('purchase')->onDelete('cascade');
            $table->foreign('Product_Id')->references('Product_Id')->on('product')->onDelete('cascade');
        });
        
    }
    
    public function down()
    {
        Schema::dropIfExists('purchasedetail');
    }
};
