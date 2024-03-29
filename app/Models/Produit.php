<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;
    protected $fillable =['designation','prix','stock','famille_id'];
    public function famille():BelongsTo
    {
        return $this->belongsTo(Famille::class);
    }

}
