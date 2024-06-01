<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->id('id_aspirasi');
            $table->enum('status', ['menunggu', 'proses', 'selesai']);
            $table->bigInteger('nik')->unsigned();
            $table->foreign('nik')->references('nik')->on('input_aspirasi')->onDelete('cascade');
            $table->string('feedback', 100);
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
        Schema::dropIfExists('aspirasi');
    }
}