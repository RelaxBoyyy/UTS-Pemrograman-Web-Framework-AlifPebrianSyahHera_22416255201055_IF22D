<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropArtikelsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('artikels');
    }

    public function down()
    {
        // Jika Anda ingin melakukan rollback (membuat tabel artikels lagi)
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            // Tambahkan kolom lain yang Anda perlukan di sini
            $table->timestamps();
        });
    }
}
