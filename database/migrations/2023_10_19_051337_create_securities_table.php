<?php

use App\Models\Security;
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
            $table->string('qrcode');
            $table->string('no_spa');
            $table->string('no_spi');
            $table->string('no_pol');
            $table->string('kir');
            $table->string('ban');
            $table->string('rem');
            $table->string('no_sim');
            $table->string('no_kartu_ijin_masuk');
            $table->string('sepatu_safety');
            $table->string('rompi');
            $table->string('helm');
            $table->string('apar');
            $table->string('nama_driver');
            $table->string('posisi');
            $table->string('status');
            $table->timestamps();
        });

//    Security::create([
//             'qrcode' => 'QR123',
//             'no_spa' => 'SPA456',
//             'no_spi' => 'SPI789',
//             'no_pol' => 'XYZ 123',
//             'kir' => 'KIR-2023',
//             'ban' => 'Good',
//             'rem' => 'Good',
//             'no_sim' => 'SIM-123',
//             'no_kartu_ijin_masuk' => 'KIM-456',
//             'sepatu_safety' => 'Yes',
//             'rompi' => 'Yes',
//             'helm' => 'Yes',
//             'apar' => 'Yes',
//             'nama_driver' => 'anam',
//             'posisi' => 'Driver',
//             'status' => 'start',
//         ]);
    

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
