<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_pekerjas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjasTable extends Migration
{
    public function up()
    {
        Schema::create('pekerjas', function (Blueprint $table) {
            $table->id(); // Menyediakan kolom 'id' bertipe BIGINT UNSIGNED
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('telepon');
            $table->text('bio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pekerjas');
    }
}