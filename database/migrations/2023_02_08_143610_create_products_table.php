<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('medium');
            $table->float('size_width');
            $table->float('size_length');
            $table->float('size_total');
            $table->timestamp('created_date')->nullable(true);
            $table->integer('edition');
            $table->integer('quantity');
            $table->string('status');
            $table->string('location');
            $table->float('price');
            $table->timestamp('estimate_finished_date')->nullable(true);
            $table->timestamp('acqustion_date')->nullable(true);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(true);
            $table->softDeletes();
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
