<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'opd_id',
        'position_id',
        'panggol_id',
        'nip',
        'name',
        'address',
        'birth_place',
        'birth_date',
        'no_hp',
        'pensiun_date',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function opd(): BelongsTo
    {
        return $this->belongsTo(Opd::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function panggol(): BelongsTo
    {
        return $this->belongsTo(PangGol::class);
    }

    public function pengajuan(): BelongsTo
    {
        return $this->belongsTo(Pengajuan::class);
    }
}
