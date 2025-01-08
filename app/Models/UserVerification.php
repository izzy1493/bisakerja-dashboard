<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserVerification extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'user_verifications';

    // Menentukan kolom-kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'user_id',
        'id_card_number',
        'id_card_photo',
        'selfie_photo',
        'status',
        'verified_at',
    ];

    // Relasi ke model User (user yang terverifikasi)
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function up()
    {
        Schema::create('user_verifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_verified')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
