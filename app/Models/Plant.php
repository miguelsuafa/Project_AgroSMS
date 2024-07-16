<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'disease_name', //Nueva columna
        'description',
        'image',
        'chemical_treatment', // Nueva columna
        'treatment_quantity', // Nueva columna
        'preventive_measures', // Nueva columna
    ];
}


