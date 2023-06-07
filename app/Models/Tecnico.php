<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

    


class Tecnico extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
     public $timestamps = false;

    protected $table = 'tecnico';
    // Resto del código del modelo...
    protected $fillable = [
        'codcontexto',
        'revision',
        'fecha',
        'software',
        'hardware',
        'reportes',
    ];

}
