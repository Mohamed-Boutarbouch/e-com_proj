<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Famille extends Model
{
    use HasFactory;

    public function sousFamilles(): HasMany
    {
        return $this->hasMany(SousFamille::class);
    }
}
