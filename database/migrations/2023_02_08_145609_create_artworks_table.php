<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('artwork_title_en');
            $table->string('artwork_title_th')->nullable(true);
            $table->string('description')->nullable(true);
            $table->unsignedBigInteger('artist_id')->nullable(true);
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->unsignedBigInteger('inventory_id')->nullable(true);
            $table->foreign('inventory_id')->references('id')->on('inventories');
            $table->unsignedBigInteger('product_id')->nullable(true);
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('artworks');
    }
}
