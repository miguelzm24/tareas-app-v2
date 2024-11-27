<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';

    protected $fillable = ['nombre', 'apellido', 'dni'];

    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }

}
