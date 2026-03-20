<div class="product-card bg-white shadow-lg rounded-xl p-4 hover:shadow-xl transition">

    <!-- Image -- with asset helper -->
    <div class="mb-4">
        <img src="{{ asset('images/'.$product->image) }}"
             class="w-full h-48 object-cover rounded-lg"
             alt="Product Image">
    </div>

    <!-- Product Info -->
    <h2 class="text-xl font-bold text-gray-800">
        {{ $product->name }}
    </h2>

    <p class="text-gray-600 mt-2">
        Category: {{ $product->category }}
    </p>

    <p class="text-gray-700 mt-2">
        {{ $product->description }}
    </p>

    <p class="text-gray-800 font-bold mt-2">
        @currency($product->price)
    </p>

    <!-- Delete Button -->
    <button 
        class="delete-product mt-3 bg-red-500 text-white px-3 py-1 rounded"
        data-id="{{ $product->id }}">
        Delete
    </button>

</div>