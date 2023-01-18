<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'duree',
        'prix'

    ];

    public function adherents()
    {
        return $this->hasMany(User::class);
    }
}
