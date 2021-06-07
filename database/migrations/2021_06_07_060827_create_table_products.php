<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('presentation_id');

            $table->integer('unit');
            $table->decimal('price', $precision = 10, $scale = 2)->nullable();
            $table->string('slug');

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('presentation_id')->references('id')->on('presentations');
            
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
}
