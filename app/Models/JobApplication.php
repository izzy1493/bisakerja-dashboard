<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = 'job_applications';

    protected $fillable = [
        'job_id',
        'seeker_id',
        'status',
        'applied_at',
    ];

    protected $casts = [
        'applied_at' => 'datetime',
    ];

    // Relasi dengan Job
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
        // Relasi ke Job, pastikan 'job_id' benar
    }

    // Relasi dengan User (Seeker/Pelamar)
    public function seeker()
    {
        return $this->belongsTo(User::class, 'seeker_id', 'id'); // 'seeker_id' merujuk ke 'id' di tabel users
    }
}
