<a href="/product/{{ $product->id }}" style="text-decoration: none; color:black;">
    <div class ="card" style="width: 12rem;">
        <img src="{{ asset('storage/product_images/'.$product->product_image)}}" class="card-img-top" style="width: 100%; height: 12rem;"/>
        <div class="card-body">
            <p>{{ $product->product_name }}</p>
            <strong>{{ "IDR ".$product->product_price }}</strong>
        </div>
    </div>
</a>
