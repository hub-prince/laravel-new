@extends('layouts.app')

@section('content')

<h2 class="text-xl font-bold">{{ $title }}</h2>
<p>Total Products: {{ $total }}</p>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    @forelse($products as $product)
    <x-product-card :product="$product" />
    @empty
    <p class="text-center text-gray-500 col-span-3">
        No products available.
    </p>
    @endforelse

    
 

</div>

@endsection