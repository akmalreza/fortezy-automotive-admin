<?php

namespace App\Http\Repositories;

use App\Models\Admin as MainModel;
use Illuminate\Support\Facades\Hash;

class AdminRepository {
    public function __construct() {
        //
    }

    public function create(array $input): MainModel {
        $data = new MainModel;
        $data->name = $input['name'];
        $data->email = $input['email'];
        $data->password = Hash::make($input['password']);
        $data->save();

        return $data;
    }
}