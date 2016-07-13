<?php

namespace MkOnline;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'nombre', 'descripcion',
    ];

    protected $table = 'categories';
}
