<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecondarySector extends Model
{
    //
    protected $fillable = [
        'arabic_name', 'english_name','registration_fees', 'Subscription_fees', 'main_sector_id', 'created_at'
    ];

    public function mainSectors()
    {
        return $this->belongsTo(MainSector::class);
    }
}
