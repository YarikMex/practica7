<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    /** @use HasFactory<\Database\Factories\GrupoFactory> */
    use HasFactory;
    protected $fillable = [
        'nombreGrupo',
        'descripcionGrupo',
        'maxAlumnos',
        'idPeriodo',
        'idMateria',
        'noTrabajador'];
        protected $primaryKey = 'idGrupo';

}
