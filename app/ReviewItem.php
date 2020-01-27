<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps=true;
    protected $fillable = [
        'arabic_name', 'english_name', 'sub_standards_id','created_at','updated_at'
    ];
}
