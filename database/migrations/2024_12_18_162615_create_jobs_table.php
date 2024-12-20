<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('job_id'); // ID pekerjaan unik
            $table->foreignId('provider_id'); // Relasi dengan tabel users (penyedia kerja)
            $table->string('title'); // Judul pekerjaan
            $table->text('description'); // Deskripsi pekerjaan
            $table->string('location'); // Lokasi pekerjaan
            $table->decimal('wage', 10, 2); // Upah pekerjaan
            $table->string('duration'); // Durasi pekerjaan
            $table->text('requirements'); // Persyaratan pekerjaan
            $table->enum('status', ['Pending', 'Active', 'Completed', 'Cancelled'])->default('Pending'); // Status pekerjaan
            $table->timestamps(); // Kolom created_at dan updated_at otomatis ditambahkan
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
