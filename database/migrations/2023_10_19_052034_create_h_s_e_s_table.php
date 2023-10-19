<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHSESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_s_e_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('security_id')->constrained();
            $table->string('cek_fisik_armada');
            $table->string('kir_head_truck');
            $table->string('tkir_tangki');
            $table->string('ijin_katup_pengaman');
            $table->string('amd');
            $table->string('kelengkapan');
            $table->string('catatan');
            $table->string('status');
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
        Schema::dropIfExists('h_s_e_s');
    }
}
