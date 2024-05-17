<div>
    {{ $shop->name }}
    @foreach ($shop->products as $product)
    <ul>
        <li>
            {{ $product->amount }}
        </li>
        <li>
            {{ $product->title }}
        </li>
        <li>
            {{ $product->description }}
        </li>
    </ul>
    @endforeach
</div>