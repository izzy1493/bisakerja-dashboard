<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id('application_id'); // ID unik untuk setiap aplikasi pekerjaan
            $table->foreignId('job_id'); // Relasi dengan tabel jobs
            $table->foreignId('seeker_id'); // Relasi dengan tabel users (pencari kerja)
            $table->enum('status', ['Applied', 'Accepted', 'Rejected', 'Completed'])->default('Applied'); // Status aplikasi pekerjaan
            $table->timestamp('applied_at')->useCurrent(); // Waktu aplikasi dibuat, default adalah waktu saat ini
            $table->timestamps(); // Kolom created_at dan updated_at otomatis ditambahkan
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
