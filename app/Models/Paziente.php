<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paziente extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'cognome'
    ];

    public function vaccino(){
        return $this->belongsTo(Vaccino::class);
    }
}
