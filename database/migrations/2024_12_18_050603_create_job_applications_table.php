<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateJobApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id('application_id');
            $table->foreignId('job_id')->constrained('jobs');
            $table->foreignId('seeker_id')->constrained('users');
            $table->enum('status', ['Applied', 'Accepted', 'Rejected', 'Completed'])->default('Applied');
            $table->timestamp('applied_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
