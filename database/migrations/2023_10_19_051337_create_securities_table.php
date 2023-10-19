<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('securities', function (Blueprint $table) {
            $table->id();
            $table->string('no_spa');
            $table->string('no_spi');
            $table->string('no_pol');
            $table->string('kir');
            $table->string('ban');
            $table->string('rem');
            $table->string('no_sim');
            $table->string('no_kartu_ijin_sim');
            $table->string('nama');
            $table->string('sepatu_safety');
            $table->string('rompi');
            $table->string('helm');
            $table->string('apar');
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
        Schema::dropIfExists('securities');
    }
}
