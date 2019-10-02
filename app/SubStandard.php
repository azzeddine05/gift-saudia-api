<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubStandard extends Model
{
    protected $fillable = [
        'arabic_name', 'english_name', 'weight', 'main_standard_id'
    ];

    public function mainStandard()
    {
        return $this->belongsTo(MainStandard::class);
    }

}
