<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id'); // ID unik untuk pembayaran
            $table->foreignId('job_id'); // Relasi dengan tabel jobs
            $table->foreignId('provider_id'); // Relasi dengan tabel users (penyedia kerja)
            $table->decimal('amount', 10, 2); // Jumlah pembayaran
            $table->string('transfer_proof'); // Bukti transfer
            $table->enum('status', ['Pending', 'Validated', 'Rejected'])->default('Pending'); // Status pembayaran
            $table->timestamps(); // Kolom created_at dan updated_at otomatis ditambahkan
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
