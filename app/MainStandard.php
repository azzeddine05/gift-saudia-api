<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainStandard extends Model
{
    protected $fillable = [
        'arabic_name', 'english_name', 'weight'
    ];

    public function subStandard()
    {
        return $this->hasMany(SubStandard::class);
    }

}
