<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistredCompany extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'value', 'type',
    ];
}
