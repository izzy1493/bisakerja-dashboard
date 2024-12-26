<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escrow extends Model
{
    use HasFactory;

    protected $table = 'escrows';

    protected $fillable = [
        'job_id',
        'seeker_id',
        'amount',
        'status',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id','job_id');
    }

    public function seeker()
    {
        return $this->belongsTo(User::class, 'seeker_id');
    }
}
