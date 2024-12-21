<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLogsTable extends Migration
{
    public function up()
    {
        Schema::create('user_logs', function (Blueprint $table) {
            $table->id('log_id'); // ID unik untuk log
            $table->foreignId('user_id'); // Relasi ke tabel users
            $table->text('action'); // Deskripsi aktivitas atau tindakan pengguna
            $table->timestamps(); // Kolom created_at dan updated_at otomatis ditambahkan
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_logs');
    }
}
