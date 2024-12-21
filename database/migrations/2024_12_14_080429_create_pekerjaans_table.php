<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_pekerjaans_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaansTable extends Migration
{
    public function up()
    {
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('kategori');
            $table->date('tenggat_waktu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pekerjaans');
    }
}
