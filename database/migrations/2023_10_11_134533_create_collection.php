<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Pangeran Jonathan (6706223030) | D3 RPLA 46-03
        Schema::create('collection', function (Blueprint $table) {
            $table->integer('id',11);
            $table->string('nama_koleksi,100');
            $table->tinyinteger('tipe_koleksi');
            $table->integer('jumlah_koleksi');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collection');
    }
};
