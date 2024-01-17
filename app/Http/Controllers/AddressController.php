<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index() {
        $addresses = Address::all();
        return $addresses;
    }

    public function findOne(Request $request) {
        $address = Address::find($request->id);
        $address['user'] = $address->user;
        return $address;
    }

    public function create() {
        $info = [
            'address' => 'Rua dos Monjueiros'
        ];
        $address = new Address($info);
        $address->save();

        return $address;
    }
}
