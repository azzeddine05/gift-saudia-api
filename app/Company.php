<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'phone','email','sub_sector_id', 'headquarters', 'user_id'
    ];

    public function subSector()
    {
        return $this->belongsTo(SecondarySector::class);
    }

    public static function createCompany($data, $user)
    {
       return Company::create([
            'name' => $data->get('name'),
            'phone' => $data->get('phone'),
            'headquarters' => $data->get('headquarters'),
            'sub_sector_id' => $data->get('sub_sector_id'),
            'user_id' => $user->id,
        ]);
    }
}
