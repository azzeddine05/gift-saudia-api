<?php

namespace App\Repositories;

use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }

    public function createUser($data)
    {
        $user = User::create([
            'name' => $data->get('name'),
            'email' => $data->get('email'),
            'password' => Hash::make($data->get('password')),
        ]);
        return $user;
    }
}
