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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            // $table->unsignedBigInteger('category_id');
            $table->string('SKU');
            // $table->unsignedBigInteger('publishing_company_id');
            $table->string('author');
            $table->decimal('price', 10, 2);
            $table->integer('quantity')->default(0);
            $table->text('description')->nullable();
            $table->date('published_date')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
        
            // Định nghĩa khóa ngoại nếu cần
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('publishing_company_id')->constrained('publishing_companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
