<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'photo',
        'date',
        'horaire'

    ];

    public function planning()
    {
        return $this->hasMany(Planning::class);
    }
    
    public function session()
    {
        return $this->belongsToMany(User::class,'sessions');
    }
}
