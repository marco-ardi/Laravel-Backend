<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'cognome',
        'specializzazione'
    ];

    public function medico(){
        return $this->belongsTo(Vaccino::class);
    }
}
