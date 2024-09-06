<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    //Asiganmos los atributos que pueden ser agregados de forma global
    protected $fillable = ['name', 'email', 'password', 'dui', 'edad', 'licencia', 'address', 'phone'];

    //Funcion para generar relacion 1-N
    public function especialidades(){
        return $this->belongsTo(Especialidades::class, 'id_Especialidad');
    }
}
