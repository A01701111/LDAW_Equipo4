<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'ID_Title',
        'ID_User',
        'Descripcion',
        'Consola',
        'Estado_Fisico',
    ];
}
