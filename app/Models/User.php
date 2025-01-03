<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Ini yang memastikan model User mengimplementasikan Authenticatable
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Nama tabel yang digunakan oleh model
    protected $table = 'users';

    // Kolom yang dapat diisi (mass-assignable)
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',  // Menambahkan phone
        'role',
        'is_verified',
    ];

    // Kolom yang tidak dapat diisi (guarded)
    protected $guarded = [
        'user_id',
    ];

    // Kolom yang harus di-casting ke tipe data tertentu
    protected $casts = [
        'is_verified' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relasi dengan tabel `user_verifications`
    public function verification()
    {
        return $this->hasOne(UserVerification::class, 'user_id');
    }

    // Relasi dengan tabel `jobs`
    public function jobs()
    {
        return $this->hasMany(Job::class, 'provider_id');
    }

    // Relasi dengan tabel `job_applications`
    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'seeker_id');
    }

    // Relasi dengan tabel `payments`
    public function payments()
    {
        return $this->hasMany(Payment::class, 'provider_id');
    }

    // Relasi dengan tabel `escrows`
    public function escrows()
    {
        return $this->hasMany(Escrow::class, 'seeker_id');
    }

    // Relasi dengan tabel `user_logs`
    public function logs()
    {
        return $this->hasMany(UserLog::class, 'user_id');
    }

    // Mengakses nama lengkap pengguna (contoh penggunaan accessor)
    public function getFullNameAttribute()
    {
        return $this->name;
    }
}
