<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmodels', function (Blueprint $table) {
            $table->id();
            $table->string("btitle");
            $table->string("bauthor");
            $table->string("bdistribution");
            $table->string("bdescribtion");
            $table->string("bprize");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookmodels');
    }
}
