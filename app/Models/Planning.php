<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;

    protected $fillable = [
        'jour',
        'heure_debut',
        'duree'
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
