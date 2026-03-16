<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Variables editables para que podamos modificarlas 
    protected $fillable = [
        'titulo',
        'descipcion',
        'prioridad',
        'tecnico',
    ];
}
