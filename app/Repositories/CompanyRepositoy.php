<?php

namespace App\Repositories;

use App\Company;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CompanyRepositoy.
 */
class CompanyRepositoy
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }
    public function createCompany($data, $user)
    {
        $company = Company::create([
            'name' => $data->get('name'),
            'phone' => $data->get('phone'),
            'headquarters' => $data->get('headquarters'),
            'sub_sector_id' => $data->get('sub_sector_id'),
            'user_id' => $user->id,
            'confirmed_registre' => false,
        ]);
        return $company;
    }
}
