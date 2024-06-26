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
        Schema::create('tb_bayar', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('watt');
            $table->date('tgl_bayar');
            $table->date('tgl_jatuh_tempo');
            $table->decimal('jumlah_bayar', 10, 2);
            $table->decimal('nominal', 10, 2);
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
        //
    }
};
