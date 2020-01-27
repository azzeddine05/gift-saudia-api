<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $table = 'association';
    public $timestamps=true;

    protected $fillable = [
        'id_review', 'id_sub_standar', 'updated_at', 'created_at'
    ];

    public function getActiveAssociation()
    {

    }
}
