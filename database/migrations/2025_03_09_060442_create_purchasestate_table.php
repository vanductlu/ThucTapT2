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
        Schema::create('purchasestate', function (Blueprint $table) {
            $table->integer('PurchaseState_Key')->primary();
            $table->string('Value', 50)->nullable();
            $table->string('Description', 50)->nullable();
            $table->string('DisplayText', 50)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('purchasestate');
    }
};
