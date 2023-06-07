<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'probabilidad', 'impacto','resultado'];
}

?>