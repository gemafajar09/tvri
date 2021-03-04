<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasjidModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kas_masjid', function (Blueprint $table) {
            $table->id('id_kas_masjid');
            $table->date('tgl_kas');
            $table->enum('jenis_kas', ['Pemasukan','Pengeluaran']);
            $table->string('keterangan')->nullable();
            $table->string('pemasukan')->default(0);
            $table->string('pengeluaran')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_kas_masjid');
    }
}
