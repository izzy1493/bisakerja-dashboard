<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
        'description',
        'evidence',
        'status',
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke model Job
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
