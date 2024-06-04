<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class satuan extends Model
{
    use HasFactory;

    public function stoks(): HasOne
    {
        return $this->hasOne(Stok::class);
    }
}
