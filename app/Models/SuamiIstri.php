<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuamiIstri extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'opd_id',
        'pegawai_id',
        'name',
        'birth_place',
        'birth_date',
        'birth_wedd',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function opd(): BelongsTo
    {
        return $this->belongsTo(Opd::class);
    }

    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class);
    }
}
