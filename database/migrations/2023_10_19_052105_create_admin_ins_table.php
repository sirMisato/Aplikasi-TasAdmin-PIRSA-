<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_ins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hse_id'); // Kolom yang akan menjadi kunci asing
            $table->foreign('hse_id')->references('id')->on('h_s_e_s');
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
        Schema::dropIfExists('admin_ins');
    }
}
