<!-- resources/views/products/create.blade.php -->
@if ($errors->any())
<div style="color:red;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
</head>

<body>

    <h2>Add Product</h2>

    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="number" name="price" placeholder="Price"><br><br>
        <textarea name="description" placeholder="Description"></textarea><br><br>
        <input type="text" name="category" placeholder="Category"><br><br>

        <!-- ✅ File Input -->
        <input type="file" name="image"><br><br>

        <button type="submit">Add Product</button>
    </form>
    
    @if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif

    <form method="GET" action="{{ route('products.search') }}">
        <input type="text" name="category" placeholder="Category">
        <input type="number" name="price" placeholder="Max Price">
        <button type="submit">Search</button>
    </form>
</body>

</html>