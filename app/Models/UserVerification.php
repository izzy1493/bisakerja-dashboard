<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'user_verifications';

    // Menentukan kolom primary key
    protected $primaryKey = 'verification_id';

    // Menonaktifkan auto-increment karena verification_id bukan auto-increment
    public $incrementing = false;

    // Menentukan tipe data primary key
    protected $keyType = 'string'; // Sesuaikan dengan tipe data primary key (string, integer, dll)

    // Menentukan kolom-kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'verification_id',
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
        return $this->belongsTo(User::class, 'user_id', 'id'); // 'user_id' merujuk ke 'id' di tabel User
    }
}
