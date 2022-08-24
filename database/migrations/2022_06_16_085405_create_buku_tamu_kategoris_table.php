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
        Schema::create('buku_tamu_kategoris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bukutamus_id');
            $table->unsignedBigInteger('kategoris_id');

            $table->foreign('bukutamus_id')->references('id')->on('bukutamus');
            $table->foreign('kategoris_id')->references('id')->on('kategoris');
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
        Schema::dropIfExists('buku_tamu_kategoris');
    }
};
