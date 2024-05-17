<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class ImageController extends Controller
{
    public function show()
    {
        return view("image");
    }
    public function uploadImage(Request $request)
    {


        // $request->all(); sadece text seklindeki gelen verileri gosteriyorduk.
        // $request->file() sadece file seklindeki gelen verileri 
        $request->file->store('/'); // bu kodda yuklenen dosyanin adini kendisi olusturuyor.
        //$request->file->storeAs('/', 'photo.jpg'); // bu kodda yuklenen dosyanin adini
        // biz olusturuyoruz. dosya ismi verirken sabit bir isim verince en son
        // yuklenen resim storage da kalacak ve daha onceki yuklenen resimler silinecektir.

        // storage/app/public icindeki dosyalarimizin herkes tarafindan ulasilabilir olmasi icin 
        // php artisan storage:link bu kod ile public hale getiriyoruz.

        //----dosya silme yol -1
        //Storage::disk("public")->delete("/photo.jpg"); // disk belirtelerek dosya silme
        //Storage::delete("/photo.jpg");//disk belirtmeden dosya silme

        //----dosya silme yol -2
        //file::delete(storage_path("/app/public/VaBPriooiQIArJgsaTg9lTpBnz5E1cN61qh2NlC2.png"));

        //----dosya silme yol -3
        //unlink(storage_path("/app/public/VaBPriooiQIArJgsaTg9lTpBnz5E1cN61qh2NlC2.png"));
        //en kolay dosya silme yontemi 1. yoldaki gibidir.    
        $product = Product::find(1);
        return response()->json($product);
        return redirect()->route('home');

    }
}
