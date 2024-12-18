<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserVerificationsTable extends Migration
{
    public function up()
    {
        Schema::create('user_verifications', function (Blueprint $table) {
            $table->id('verification_id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('id_card_number');
            $table->string('id_card_photo');
            $table->string('selfie_photo');
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_verifications');
    }
}
