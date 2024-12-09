<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom 'phone'
            $table->string('phone', 20)->nullable()->after('email'); 
            // Menambahkan kolom 'role' dengan default 'user'
            $table->string('role', 50)->default('user')->after('phone'); 
            // Menambahkan kolom 'is_verified' dengan default 'false'
            $table->boolean('is_verified')->default(false)->after('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menghapus kolom jika rollback
            $table->dropColumn(['phone', 'role', 'is_verified']);
        });
    }
}
