<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $request) {
        $user = User::find($request->id);
        return $user->address;
    }

    public function create() {
        $info = [
            'name' => 'Joaozin',
            'email' => 'joao@hotmail.com',
            'password' => 'jaojao'
        ];
        $user = new User($info);
        $user->save();

        return $user;
    }
}
