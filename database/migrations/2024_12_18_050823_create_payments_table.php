<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('job_id')->constrained('jobs');
            $table->foreignId('provider_id')->constrained('users');
            $table->decimal('amount', 10, 2);
            $table->string('transfer_proof');
            $table->enum('status', ['Pending', 'Validated', 'Rejected'])->default('Pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
