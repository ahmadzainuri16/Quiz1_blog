<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_post', function (Blueprint $table) {
            $table->increments('id_post');
            $table->date('tanggal');
            $table->string('slug');
            $table->string('title');
            $table->string('keterangan');
            $table->integer('id_cat');
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
        Schema::dropIfExists('tb_post');
    }
}
