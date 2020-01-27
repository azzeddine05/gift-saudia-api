<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainSector extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'main_sectors';
    public $timestamps=true;
    protected $fillable = [
        'arabic_name', 'english_name', 'created_at','updated_at'
    ];


    public function secondarySectors()
    {
        return $this->hasMany(SecondarySector::class);
    }

}
