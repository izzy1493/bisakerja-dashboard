<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLogsTable extends Migration
{
    public function up()
    {
        Schema::create('user_logs', function (Blueprint $table) {
            $table->id('log_id');
            $table->foreignId('user_id')->constrained('users');
            $table->text('action');
            $table->timestamp('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_logs');
    }
}
