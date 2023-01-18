<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
        'photo'
    

    ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
