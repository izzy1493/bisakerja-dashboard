<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); // kolom ID sebagai primary key
            $table->string('title'); // Judul pekerjaan
            $table->string('company'); // Nama perusahaan
            $table->string('location'); // Lokasi pekerjaan
            $table->decimal('salary', 15, 2); // Gaji pekerjaan
            $table->text('qualification'); // Kualifikasi pekerjaan
            $table->text('description'); // Deskripsi pekerjaan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
