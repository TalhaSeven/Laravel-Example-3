<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index(){
        $address = Address::find(1);
        return view("address",compact("address"));
    }
}
