<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobProposal extends Model
{
    use HasFactory;

    protected $table ='proposals';

    protected $fillable = [
        'pekerjaan_id',
        'pekerja_id',
        'deskripsi',
        'harga',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class);
    }
}