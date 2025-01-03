<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_policies_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliciesTable extends Migration
{
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->decimal('serviceFee', 10, 2);  // Menyimpan biaya layanan dalam format desimal
            $table->text('refundPolicy');  // Menyimpan kebijakan refund
            $table->text('contentRules');  // Menyimpan aturan konten
            $table->timestamps();  // Menyimpan waktu pembuatan dan pembaruan data
        });
    }

    public function down()
    {
        Schema::dropIfExists('policies');
    }
}
