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
            $table->unsignedBigInteger('user_id'); // Ganti dengan unsignedBigInteger untuk kolom user_id
            $table->string('id_card_number');
            $table->string('id_card_photo');
            $table->string('selfie_photo');
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps(0);

            // Menambahkan foreign key
            $table->foreign('user_id')
                ->references('user_id') // Mengarah ke kolom 'user_id' di tabel users
                ->on('users')
                ->onDelete('cascade'); // Tambahkan aksi penghapusan jika user dihapus
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_verifications');
    }
}
