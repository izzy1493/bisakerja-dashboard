<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $primaryKey = 'job_id';


    protected $fillable = [
        'provider_id',
        'title',
        'description',
        'location',
        'wage',
        'duration',
        'requirements',
        'status',
    ];

    protected $casts = [
        'wage' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class, 'job_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'job_id');
    }

    public function escrows()
    {
        return $this->hasMany(Escrow::class, 'job_id');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'job_id');
    }
}
