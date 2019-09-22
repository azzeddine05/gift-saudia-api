<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftStep extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'arabic_name', 'english_name', 'start_date', 'end_date', 'created_at'
    ];
}
