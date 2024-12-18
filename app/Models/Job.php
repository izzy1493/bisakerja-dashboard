<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;



    // Tentukan kolom-kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'title',
        'company',
        'location',
        'salary',
        'description',
    ];

}
