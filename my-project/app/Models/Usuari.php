<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;
    protected $table = 'usuaris';

    // Se indica los datos $fillable
// En tu modelo Usuari
protected $fillable = [
    'name', 
    'surname', 
    'password',
    'email', 
    'rol', 
    'actiu', 
];

    protected $hidden = [
        
        ];

}
