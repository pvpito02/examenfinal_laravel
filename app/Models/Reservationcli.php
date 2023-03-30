<?php

namespace App\Models;
use App\Models\Vehicule;
use App\Models\Comptechauffeur;
use App\Models\Compteclient;
use App\Models\Tarrifcourse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservationcli extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombreClient',
        'vehicule_id',
        'tarrifcourse_id',
        'comptechauffeur_id',
        'compteclient_id',

    ];

    
    public function tarrif()
    {
        return $this->belongsTo(Tarrifcourse::class);
    }
    public function chauffeur()
    {
        return $this->belongsTo(Comptechauffeur::class);
    }
    public function vehicule()
    {
        return $this->belongsTo(vehicule::class);
    }
   
    public function client()
    {
        return $this->belongsTo(Compteclient::class);
    }
}
