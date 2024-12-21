<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;

    // Tentukan nama tabel (opsional jika nama tabel sesuai dengan nama model dalam bentuk jamak)
    protected $table = 'pekerjas';

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'nama', 
        'email', 
        'telepon', 
        'bio'
    ];

    // Relasi dengan model Proposal (1 Pekerja memiliki banyak Proposal)
    public function proposals()
    {
        return $this->hasMany(JobProposal::class);
    }
}