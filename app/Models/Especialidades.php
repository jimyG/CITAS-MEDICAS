<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidades extends Model
{
    use HasFactory;
    //Asiganmos los atributos que pueden ser agregados de forma global
    protected $fillable = ['name', 'descripcion'];

    //Funcion para generar relacion 1-N
    public function medicos(){
        return $this->hasMany(Medico::class, 'id_Especialidad');
        
    }
}
