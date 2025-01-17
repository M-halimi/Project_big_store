<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Famille extends Model
{
    use HasFactory;
    protected $fillable =['famille'];
    public function produit():HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
