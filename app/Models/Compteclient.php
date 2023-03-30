<?php

namespace App\Models;
use App\Models\Reservationcli;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compteclient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameCli',
        'numTelCli',
        'adresseCli',
        'email',
        'password',

    ];

    public function comptecli_reserves()
    {
        return $this->hasMany(Reservationcli::class);
    }
}
