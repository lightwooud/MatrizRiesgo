<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

    


class Dofa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    public $timestamps = false;

    protected $table = 'dofa';
    // Resto del código del modelo...
    protected $fillable = [
        'codcontexto',
        'internas',
        'externas',
        'debilidades',
        'fortalezas',
        'oportunidades',
        'amenazas',
    ];

}
