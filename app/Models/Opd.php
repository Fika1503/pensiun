<?php

namespace App\Models;

use App\Models\PangGol;
use App\Models\Pegawai;
use App\Models\Document;
use App\Models\JenisDoc;
use App\Models\Position;
use App\Models\Pengajuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opd extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'code',
        'name',
        'alias',
        'address'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function opd(): BelongsTo
    {
        return $this->belongsTo(Opd::class);
    }
    public function panggol()
    {
        return $this->hasMany(PangGol::class);
    }

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }
    public function position()
    {
        return $this->hasMany(Position::class);
    }

    public function jenisdoc()
    {
        return $this->hasMany(JenisDoc::class);
    }

    public function document()
    {
        return $this->hasMany(Document::class);
    }
}
