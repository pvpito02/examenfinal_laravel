<?php

namespace App\Models;
use App\Models\Reservationcli;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'marque',
        'modele',
        'immatriculation',
    ];

    public function vehicul_reserves()
    {
        return $this->hasMany(Reservationcli::class);
    }
}
