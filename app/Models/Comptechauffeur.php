<?php

namespace App\Models;
use App\Models\Reservationcli;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comptechauffeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameC',
        'numTelC',
        'adresseC',
        'email',
        'password',

    ];
    public function comptechauff_reserves()
    {
        return $this->hasMany(Reservationcli::class);
    }
}
