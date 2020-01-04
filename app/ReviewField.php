<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewField extends Model
{

    protected $fillable = [
        'arabic_name', 'english_name', 'type',
    ];
}
