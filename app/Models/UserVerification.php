<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
