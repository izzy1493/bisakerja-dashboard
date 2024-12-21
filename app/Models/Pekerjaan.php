<?php





// app/Models/Pekerjaan.php
namespace App\Models;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proposal;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'pekerjaans';

    protected $fillable = [
        'judul',
        'deskara',
        'kategori',
        'tenggat_waktu'
    ];

    public function proposals()
    {
        return $this->hasMany(pekerjaan::class);
    }
}
// app/Models/Proposal.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $table = 'proposals';

    protected $fillable = [
        // atribut proposal
    ];
}

