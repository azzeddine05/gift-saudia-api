<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    public $association = [
        "id_review" => "id_review",
        "id_sub_standar" => "id_sub_standar"
    ];

    protected $fillable = [
        'id_review', 'id_sub_standar', 'end_date', 'created_at'
    ];

    public function getActiveAssociation()
    {

    }
}
