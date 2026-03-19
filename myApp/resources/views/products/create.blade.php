<!-- resources/views/products/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

    <h2>Add Product</h2>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Price:</label><br>
        <input type="number" name="price"><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Category:</label><br>
        <input type="text" name="category"><br><br>

        <button type="submit">Add Product</button>
    </form>
    
<form method="GET" action="{{ route('products.search') }}">
    <input type="text" name="category" placeholder="Category">
    <input type="number" name="price" placeholder="Max Price">
    <button type="submit">Search</button>
</form>
</body>
</html>