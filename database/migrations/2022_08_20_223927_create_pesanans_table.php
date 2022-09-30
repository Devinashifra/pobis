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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Pemesan');
            $table->bigInteger('No_Identitas')->length(16);
            $table->string('No_HP', "15");
            $table->string('Kelas_Penumpang');
            $table->date('Tgl_Keberangkatan');
            $table->integer('Jlh_Penumpang');
            $table->integer('Jlh_Lansia');
            $table->decimal('Harga_Tiket');
            $table->decimal('Total_Bayar');
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
        Schema::dropIfExists('pesanans');
    }
};
