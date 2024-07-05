<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCricproductTable extends Migration
{
    public function up()
    {
        Schema::create('cricproducts', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('brand');
            $table->string('product_type');
            $table->integer('price');
            $table->text('product_details')->nullable();
            $table->string('picture')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cricproducts');
    }
}
