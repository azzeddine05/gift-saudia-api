<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationField extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'arabic_name', 'english_name', 'type',
    ];
}
