<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscrowsTable extends Migration
{
    public function up()
    {
        Schema::create('escrows', function (Blueprint $table) {
            $table->id('escrow_id');
            $table->foreignId('job_id')->constrained('jobs');
            $table->foreignId('seeker_id')->constrained('users');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['Held', 'Released', 'Refunded'])->default('Held');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('escrows');
    }
}
