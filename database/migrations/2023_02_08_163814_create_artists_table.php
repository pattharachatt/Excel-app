<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_th')->nullable(true);
            $table->timestamp('date_of_birth')->nullable(true);
            $table->string('place_of_birth')->nullable(true);
            $table->string('address')->nullable(true);
            $table->string('tel_number')->nullable(true);
            $table->string('about_the_artist')->nullable(true);
            $table->string('master_work_1')->nullable(true);
            $table->string('master_work_2')->nullable(true);
            $table->string('master_work_3')->nullable(true);
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
        Schema::dropIfExists('artists');
    }
}
