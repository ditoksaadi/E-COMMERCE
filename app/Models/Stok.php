<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stok extends Model
{
    use HasFactory;
    protected $fillable = [
        "kode",
        "nama",
        "idsatuan",
        "idkategori",
        "saldoawal",
        "hargabeli",
        "hargajual",
        "tglexp",
        "hargamodal",
        "foto",
        "desk",
        "pajang",
        "saldoakhir",
    ];

    public function satuan(): BelongsTo
    {
        return $this->belongsTo(satuan::class, 'idsatuan');
    }
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'idkategori');
    }
}
