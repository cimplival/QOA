<?php

namespace QOA;

use Illuminate\Database\Eloquent\Model;

class Baptism extends Model
{
    protected $fillable = [
        'christian_name', 'family_name', 'date_of_birth', 'place_of_birth', 
        'place_of_baptism', 'date_of_baptism', 'parents_or_guardian_name','name_of_godparent', 
        'minister', 
    ];
}
