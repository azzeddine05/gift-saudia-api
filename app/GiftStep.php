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
    public $steps = [
        "stepOne" => "registred",
        "stepTwo" => "ta9yiim",
        "stepTree" => "taltaa"

    ];

    protected $fillable = [
        'arabic_name', 'english_name', 'period_type', 'start_date', 'end_date', 'created_at'
    ];

    public function getActiveStep()
    {

    }
}
