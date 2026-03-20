<!-- resources/views/products/create.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 p-6">
       <a href="{{ route('admin.dashboard') }}">-- Dashboard</a> 

    <div class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow-md">

        <h2 class="text-2xl font-bold mb-4 text-gray-800">Add Product</h2>

        <!-- 🔴 Error Messages -->
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- 🟢 Success Message -->
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        <!-- 🧾 Form -->
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <input type="text" name="name" placeholder="Product Name"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">

            <input type="number" name="price" placeholder="Price"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">

            <textarea name="description" placeholder="Description"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>

            <input type="text" name="category" placeholder="Category"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">

            <!-- File Input -->
            <input type="file" name="image"
                class="w-full border border-gray-300 rounded px-3 py-2 bg-white">

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">
                Add Product
            </button>
        </form>

        <!-- 🔍 Search Form -->
        <div class="mt-6">
            <h3 class="text-lg font-semibold mb-2">Search Products</h3>

            <form method="GET" action="{{ url('/products/search') }}" class="space-y-3">
                <input type="text" name="category" placeholder="Category"
                    class="w-full border border-gray-300 rounded px-3 py-2">

                <input type="number" name="price" placeholder="Max Price"
                    class="w-full border border-gray-300 rounded px-3 py-2">

                <button type="submit"
                    class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600 transition">
                    Search
                </button>
            </form>
        </div>

    </div>

</body>

</html>