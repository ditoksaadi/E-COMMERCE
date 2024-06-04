<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_produk',
        'id_user',
        'quantity',
];

public function stok(): BelongsTo
    {
        return $this->belongsTo(Stok::class, 'id_produk');
    }
public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
