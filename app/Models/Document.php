<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'opd_id',
        'pengajuan_id',
        'jenis_doc_id',
        'name',
        'file',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function opd(): BelongsTo
    {
        return $this->belongsTo(Opd::class);
    }

    public function jenisdoc(): BelongsTo
    {
        return $this->belongsTo(JenisDoc::class);
    }

    public function pengajuan(): BelongsTo
    {
        return $this->belongsTo(Pengajuan::class);
    }
}
