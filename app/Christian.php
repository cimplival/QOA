<?php

namespace QOA;

use Illuminate\Database\Eloquent\Model;

class Christian extends Model
{
    protected $fillable = [
        'christian_name', 'family_name', 'date_of_birth', 'place_of_birth', 'parents_or_guardian_name'
    ];
}
