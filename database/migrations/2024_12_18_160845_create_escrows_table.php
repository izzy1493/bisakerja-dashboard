<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscrowsTable extends Migration
{
    public function up()
    {
        Schema::create('escrows', function (Blueprint $table) {
            $table->id('escrow_id'); // ID unik untuk escrow
            $table->foreignId('job_id'); // Relasi ke tabel jobs
            $table->foreignId('seeker_id'); // Relasi ke tabel users (pencari kerja)
            $table->decimal('amount', 10, 2); // Jumlah dana yang ditahan dalam escrow
            $table->enum('status', ['Held', 'Released', 'Refunded'])->default('Held'); // Status escrow (ditahan, dirilis, atau dikembalikan)
            $table->timestamps(); // Kolom created_at dan updated_at otomatis ditambahkan
        });
    }

    public function down()
    {
        Schema::dropIfExists('escrows');
    }
}
