<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

    


class Contexto extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
     public $timestamps = false;

    protected $table = 'contexto';
    // Resto del código del modelo...
    protected $fillable = [
        'codigo',
        'revision',
        'fecha',
        'objetivo',
        'alcance',
        'enfoque',
    ];

}
