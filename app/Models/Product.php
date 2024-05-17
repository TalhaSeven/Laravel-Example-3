<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    //isterseni use HasFactory, SoftDeletes; bu sekilde de SoftDeletes sinifini ekleyebilirsiniz.

    //fillable ve guarded
    //bu iki tabir birbirinin zitti
    //izinverilen sutunlar fillable belirtilmeli
    //izin verilmeyen sutunlar guarded da belirtilmeli
    protected $guarded=[];
    //protected $table= "products";
    //protected $fillable=[]; 
     // protecte $fillable=['title','description','amount' ]//guarded ile bos bir array tanimlayarak hicbir sutunu koruma diyoruz. bunun yerine fillable ile butun sutunlari array in belirterek belirttigimiz sutunlara veri guncellemesi yapabiliyoruz.
    // mass assignment hatasi bu kod ile duzeltilir
    public function category(){
        return $this->belongsTo(Category::class);

    }
}



//model ismimiz migrations klasorundeki tablo isimleri ile senkronizedir. yani tablo isminin sonundaki s harfi kaldirilarak model ismi olusturdugumuzda otomatik model icinde tablo verisi paylasmamiza gerek kalmiyor.

//php artisan migrate komutu ile terminalden migrations klasorundeki tablolari db de olusturtmadiysaniz model icin tablo ismini belirtmeniz gerekmektedir.
// protected $table = 'products';