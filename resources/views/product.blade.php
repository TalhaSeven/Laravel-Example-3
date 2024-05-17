<div>
  @foreach ($products as $product )
    <h1>{{$product->title}}</h1>
    <p>{{$product->customer_name }}{{$product->description}}</p>
  @endforeach

<p>su an invokable fonksiyon ile product sayfasindasiniz  </p>
</div>
