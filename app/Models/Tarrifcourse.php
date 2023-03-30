<?php

namespace App\Models;
use App\Models\Reservationcli;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarrifcourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'depart',
        'destination',
        'prix',
    ];

    public function tarrif_reserves()
    {
        return $this->hasMany(Reservationcli::class);
    }

}
