@vite('resources/css/app.css')

<h2 class="text-xl font-bold text-gray-800">
    {{ $title }}
</h2>

<h2 class="text-xl font-bold text-gray-800">
    Total Products : {{ $total }}
</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">


    @if($products && count($products))

    @foreach($products as $product)

    <div class="bg-white shadow-lg rounded-xl p-4 hover:shadow-xl transition">

        <!-- Image -->
        <div class="mb-4">
            <img src="{{ asset('images/'.$product->image) }}" class="w-full h-48 object-cover rounded-lg"
                alt="Product Image">
        </div>

        <!-- Product Info -->
        <h2 class="text-xl font-bold text-gray-800">
            {{ $product->name }}
        </h2>

        <p class="font-bold text-gray-600 mt-2">
            Category: <span class="font-medium">{{ $product->category }}</span>
        </p>

        <h2 class="text-xl font-bold text-gray-800">
            Description : {{ $product->description }}
        </h2>

        <h2 class="text-xl font-bold text-gray-800">
            Price : {{ $product->price }}
        </h2>

    </div>
    @endforeach

</div>
@else
<p class="text-center text-gray-500 mt-10">No products found.</p>
@endif

<a href="#"
    class="btn btn-primary right-64 top-0 absolute px-3 py-2 text-white border bg-blue-500 rounded-lg">
   User :  {{$current_user->name}} <br>
    company :  {{$company_name}} <br>
   
</a>

<a href="{{ route('admin.dashboard') }}"
    class="btn btn-primary right-10 top-0 absolute px-3 py-2 text-white border bg-blue-500 rounded-lg">
    {{$current_user->name}} <br>
    dashboard
</a>

