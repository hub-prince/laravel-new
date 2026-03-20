@extends('layouts.app')

@section('content')

<h2 class="text-xl font-bold text-gray-800">
    {{ $title }}
</h2>

<h2 class="text-xl font-bold text-gray-800 mb-4">
    Total Products : {{ $total }}
</h2>

@if($products && count($products))

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
    @foreach($products as $product)

    <div class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl transition">

        <!-- Image -->
        <div class="mb-4">
            <img src="{{ asset('images/'.$product->image) }}"
                 class="w-full h-48 object-cover rounded-lg"
                 alt="Product Image">
        </div>

        <!-- Product Info -->
        <h2 class="text-xl font-bold text-gray-800">
            {{ $product->name }}
        </h2>

        <p class="font-bold text-gray-600 mt-2">
            Category: <span class="font-medium">{{ $product->category }}</span>
        </p>

        <p class="text-gray-700 mt-2">
            Description: {{ $product->description }}
        </p>

        <p class="text-gray-800 font-bold mt-2">
            Price: ₹{{ $product->price }}
        </p>

    </div>

    @endforeach

</div>

@else
<p class="text-center text-gray-500 mt-10">No products found.</p>
@endif

@endsection