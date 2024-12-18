<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('job_id');
            $table->foreignId('provider_id')->constrained('users');
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->decimal('wage', 10, 2);
            $table->string('duration');
            $table->text('requirements');
            $table->enum('status', ['Pending', 'Active', 'Completed', 'Cancelled'])->default('Pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}

