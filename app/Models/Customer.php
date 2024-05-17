<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];//bu kodun yerine fillable yazarak array icine de veri ekleyebilecegimiz sutun adlarini yazabiliriz.


    public function address(){
        return $this->hasOne(Address::class); 
        //foreingkey => tablodaki iliskili olacagimiz tablonun id sini bulundugu sutunun adi. 
        //local key => baglandigimiz tablodaki id degeridir.
    }
}
