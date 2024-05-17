<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Address;

class CustomerController extends Controller
{
    public function index(){

        $customer = Customer::find(1);//bu kodu DB::table('customers')->get() diyerekte yazabiliriz. fakat biz 1-1 iliski olusturdugumuz icin ve iliskili oldugunu modelin icinde tanimladigimizdan dolayi modeli kullanmak zorundayiz.
        $address = Address::find(1);
        return view("customer", compact("customer","address"));

    }
}
