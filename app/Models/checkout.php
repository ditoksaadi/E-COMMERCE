<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cart',
        'id_user',
    ];


public function cart(): BelongsTo
    {
        return $this->belongsTo(stok::class, 'id_cart');
    }
public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
