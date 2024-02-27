<div>
    @forelse ($products as $product)
    <li>{{$product->name}}</li>
    @empty
    <p> Nema proizvoda </p>
    @endforelse

</div>