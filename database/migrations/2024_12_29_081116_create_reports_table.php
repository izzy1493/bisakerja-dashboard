<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // ID pelapor
            $table->unsignedBigInteger('job_id'); // ID pekerjaan terkait
            $table->text('description'); // Deskripsi masalah
            $table->string('evidence')->nullable(); // Bukti yang diunggah (path file)
            $table->string('status')->default('Pending'); // Status laporan (Pending, Resolved, Escalated)
            $table->timestamps(); // created_at dan updated_at

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('job_id')->references('job_id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
