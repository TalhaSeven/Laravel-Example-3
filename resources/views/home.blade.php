
<h1>bu sayfa web.php deki home route ina gidip ordan HomeController daki index fonksiyonunu gorup gelen bir kod dur</h1>


----//blade.php uzantili dosyalarin icide php kod larini yazarken @ isareti ni her fonksiyonun onune ekle
//meliyiz. ve bitisine 'end' yazarak kapatmaliyiz /-----

@php

  foreach($courses as &$course){
    if($course['name']=="full-stack"){
        $course['price']="$1000";
    }

  }


@endphp


@foreach($courses as $course)
  @if ($course['status']=="1")
     <h1>Kurs Adı: {{$course['name']}}</h1>
     <p>Kurs Aciklamasi: {{$course['aciklama']}}</p>
     <p>{{ $course['status']=="1" ? "Kurs aktif" : "Kurs pasif"  }}</p>
    @if (isset($course['price']))
      <p>Fiyat {{$course['price']}}</p>
    @else
      <p>Fiyati belirlenmedi</p>
    @endif
    
  @endif
@endforeach  

@foreach($courses as $course)
  @if ($course['status']=="0")
     <h1>Kurs Adı: {{$course['name']}}</h1>
     <p>Kurs Aciklamasi: {{$course['aciklama']}}</p>
     <p>{{ $course['status']=="1" ? "Kurs aktif" : "Kurs pasif"  }}</p>
     @if (isset($course['price']))
      <p>Fiyat {{$course['price']}}</p>
      @else
        <p>Fiyati belirlenmedi</p>
      @endif
    
  @endif
@endforeach  