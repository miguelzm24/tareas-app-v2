<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';

    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }

}
