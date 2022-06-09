<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory;
    use SoftDeletes;

    //protected $table = "nomtaula"; per indicar el nom de la taula en cas de ser diferent

    protected $fillable = [
        'name',
        'email',
        'salary',
        'sector',
        'img', 
    ];

    //protected $timestamps = false; deshabilita els camps de les dates
}
