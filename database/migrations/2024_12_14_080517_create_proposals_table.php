<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_proposals_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pekerjaan_id')->constrained('pekerjaans')->onDelete('cascade');
            $table->foreignId('pekerja_id')->constrained('pekerjas')->onDelete('cascade');
            $table->text('deskripsi');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
