<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccino extends Model
{
    use HasFactory;
    protected $fillable=[
        'tipologia',
        'medico_id',
        'paziente_id',
        'data_somministrazione'
    ];

    public function vaccino(){
        return $this->hasMany(Medico::class);
    }

    public function paziente()
    {
        return $this->hasOne(Paziente::class);
    }
}
