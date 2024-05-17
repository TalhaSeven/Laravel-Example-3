<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) 
    {
        $products = \Product::all();
        return view('product',compact('products'));

//===modellerde veri delete(silme) islemi asagidaki gibi yapiliyor.====
        //gecici silinen veriyi geri getirme islemi
/*         return Product::all();//geri getirilen veri geri getirilmis oldu.
        return Product::onlyTrashed()->get();//geri getirilen veri artik cop kutusunda bulunmuyor.
        return Product::onlyTrashed()->findOrFail(4)->restore();//bu kod ile gecici silinen veriler geri getiriliyor.

        //gecici silinen dosyayi kalici olarak silme islemi
        return  Product::onlyTrashed()->find(3)->forceDelete();
        dd("3 numarali id kalici olarak silindi!");
       // return Product::where("amount","<",10)->delete();
        return Product::onlyTrashed()->get();//bu kod ile soft delete seklinde silinen verileri getirmis olduk.


        return Product::findOrFail(3);//bu komut ile 3 id li veri listenemiyor.
        return Product::all();//bu komut ile 3 id li veri listenemiyor.
        Product::where("id",3)->delete();//bu kod ile soft delete islemi yaptik. silinen veri tablo da var fakat deleted_at sutunda silindigi tarih yaziyor.
        dd("3 numarali id yi sildim!");


        Product::where("id",2)->delete();//bu kod ile sildiginiz veriyi artik geri getirmeniz mumkun degil.
        dd("2 numarali id yi sildim!"); */
/*         Product::where("id",1)->delete();//kokunden sildigimiz icin hard delete islemi yapmis olduk.
        return Product::findOrFail(1); */

//===modellerde veri update islemi asagidaki gibi yapiliyor.====  
        //update islemlerinde genel mantik soyledir. update edilecek veri/verilerin bir sart ile (where) belirlenmesi gerekmektedir.     
/*         $products = Product::where('amount','<',50)->update([
            "status"=>0
        ]);
        return Product::where('amount','<',50)->get(); */


 /*        $product = Product::findOrFail(80)->update([
            "description"=>"bu veriyi guncelledim!"
        ]);
        return Product::findOrFail(80); */


//===modellere veri ekleme islemi asagidaki gibi yapiliyor.====
/*         $products = Product::create([
            "title"=> "new title2",
            "description"=>"new descripton2",
            "status"=>1,
            "amount"=>45,
            "date_time"=>date("Y-m-d H:i:s"),
        ]);
        dd("create ile kayit islemi yapildi."); */

        //$products=new Product();
        //$array=[];//eklemek istediginiz urunlerin listesi olsun bu array in icinde
        //array ler [] seklinde collection {} ile belirtilir.
        //eger dd diyerek goruntulediginiz veriler {} icinde ise bu verilerin alt verilerine -> isareti ile erisebilirsiniz.
        //fakat goruntuledigniz veriler [] icerisinde ise verilere ["alt_veri_adi"] seklinde erisebilirsiniz
        //asagidaki kod blogunda bir cok veriyi ayni anda ekliyebiliyoruz.
/*        foreach($array as $item){
        $products->title=$item['title'];
        $products->description= $item['description'];
        $products->status= "1";
        $products->amount=$item['amount'];
        $products->date_time=date("Y-m-d H:i:s");
        $products->save();
        }
        dd("veri kaydedildi!");

       $products=new Product();

       $products->title="new title";
       $products->description= "new description";
       $products->status= "1";
       $products->amount="5";
       $products->date_time=date("Y-m-d H:i:s");
       $products->save();
        dd("veri kaydedildi!"); */


//===modellerde veri getirme islemi asagidaki gibi yapiliyor.==== 
/* 
        $products = Product::where("amount",-50)->orWhere("status", 0)->get();//bu komut ile ilk where sorgusundan bir veri gelmezse yani null ile ikince where komutu calisarak verileri ekrana getiriyor.
        return $products;
        return view('product', compact('products')); */

        // eger bu komutu kullanmazsan asagidaki gibi bir kod blogunu kullanmamiz gerekecektir.
 /*        $products = Product::where("amount",-50)->get();
        if (!$products){    
            $products = Product::where("status", 0)->get(); 
        } */


/*         
        $products = Product::where("amount",">",50)->get();//amount bilgisi 50 den buyuk olan verileri alip product view ina gonderiyoruz.
        return view('product', compact('products'));

        $products = Product::where("status",0)->get();//status u 0 olan verileri alip product view na gonderdik
        return view('product', compact('products'));
    
        $product = Product::findOrFail(2);
        return view('product', compact('product')); //olusturulan veriyi view e gondererek arrow function ile verinin icindeki alt verilere ulasiyoruz. $product->title seklinde

        return Product::findOrFail(200);//kodun sonucunda bir veri donmuyorsa 404 ekranini gosteren bir kod OrFail mantigi bir cok kodda bulunmaktadir. */

        /* 
        return Product::pluck("title",'id')->toArray();// DB::table("products")->pluck('title','id');
        return Product::pluck("title")->toArray();// DB::table("products")->pluck('title');
        return Product::first(); //DB::table("products")->first();
        return Product::find(100); //DB::table("products")->find(100);
        return Product::all(); //$product = DB::table("products")->get();
        //bu fonksiyon ile model deki butun verileri getirmis oluyoruz.DB sinifi ile cagrilan bu kod ile ayni isi yapmaktadir.   */
        
        
    }
}
