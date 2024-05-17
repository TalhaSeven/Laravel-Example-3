<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    



    public function index()
    {


        //aggregates
        return DB::table("customers")->where('date',"<","2024-05-10")->max("piece");//verilen kosuldaki en buyuk degeri buluyoruz max ile.
        //sum toplamak icin kullanilir
        //avg ortalamayi bulmak icin kullnilir
        //min en az hangi sayi varsa onu bulmak icin
        //max en fazla hangi sayi varsa onu bulmak icin


        
        return DB::table("customers")->join('products','products.id','=','customers.product_id')->select('customers.*')->get();//bu fonksiyon ile join metodunu kullanarak. customers tablosundaki product_id verisini products tablosundaki id sutunda aratip ordaki verileri getiriyoruz.


        DB::table("products")->delete(101);
        dd  ('veri silindi!');//bu kod farkli bir sekilde veri silmeyi gorduk.
        DB::table("products")->where('title','ezeL1ik6vsH2yN7p66bbNdEdJ2dBRewYB3IXKap5AleEk9LHzKNZxbs1d7ftNXuHTMH2ZdRdjek')->delete();//bu ile sorgulamasini yaptigimiz veri/veriler silinmis oldu.
        dd  ('veri silindi!');

        DB::table("products")->where('title','Laptop')->update([
            "status"=>1
        ]);//bu kod ile verileri update etmis oluyoruz.
        dd("veriler update edildi!");

        //bu satirin altinda veri eklemeyi gorduk.
        DB::table("products")->insert([
            "title"=> "Laptop",
            "description"=> "lorem ipsum",
            "status"=>0,
            "created_at"=>date("Y-m-d H:i:s"),
            "updated_at"=>date("Y-m-d H:i:s"),
            "amount"=> "3",
            "date_time"=> date("Y-m-d H:i:s"),
        ]); //bu kod ile tek bir veri eklemis olduk.

   /*      DB::table("products")->insert([
            "title"=> "Laptop",
            "description"=> "lorem ipsum",
            "status"=>0,
            "created_at"=>date("Y-m-d H:i:s"),
            "updated_at"=>date("Y-m-d H:i:s"),
            "amount"=> "3",
            "date_time"=> date("Y-m-d H:i:s"),
        ],
        [
            "title"=> "Laptop2",
            "description"=> "2lorem ipsum",
            "status"=>1,
            "created_at"=>date("Y-m-d H:i:s"),
            "updated_at"=>date("Y-m-d H:i:s"),
            "amount"=> "3",
            "date_time"=> date("Y-m-d H:i:s"),
        ]) */;//bu kod ile ayni anda 2 tane veri ekleyebiliyoruz. fakat su an da bir sorun oldu.
        dd("veri yuklendi!");

  
       

        //bu satirin altindaki kodlar ile mevcut veriler uzerinde sorgulamalar yaparak ekrana getirdik.

        return DB::table("products")->latest()->get();//bu kod ile en son yuklenen den ilk yuklenene gore sirali sekilde butun verileri ekrana getiriyor.

        return DB::table("products")->where("status","!=",0)->where('amount','<',20)->get();//bu fonksiyon ile statusu 0 olmayan ve amount bilgisi 20 den kucuk olan verileri ekrana getirir.

        return DB::table("products")->where("status","!=",0)->get();//bu fonksiyon ile status u 0 olmayanlari ekrana getirmis oluyoruz.

        return DB::table("products")->where("status",0)->get();//ortadaki esittiri kaldirarak ayni sonuca ulasabiliyoruz.

        return DB::table("products")->where("status","=",0)->get();//where fonksiyonu ile status u 0 a esit olan verileri ekrana getirmis oluyoruz.

        return DB::table("products")->pluck('title','id');//bu fonksiyon ile benzersiz title array ini yaninda bu benzersiz title in id sinide ekleyebiliyoruz.

        return DB::table("products")->pluck('title');//bu fonksiyon ile icine yazdigimiz sutundaki verilerin tekrar edenlerini silerek her cesit veriden sadece bir tane alarak array olusturuyor.

        return DB::table("products")->first();// bu kod ile table daki ilk kayit ekrana geliyor.
        
        return DB::table("products")->find(100);// bu kod ile products tablosundaki find fonksiyonun icinde belirtilen id li veriyi ekrana getirmis oluyoruz. find dediginizda sadece id yi arar.

        return DB::table("products")->get(); //bu kod ile products tablosundaki butun verileri ekrana getirmis oluyoruz.
        

            
    }

}

