<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product Creation</title>
</head>
<body>
    <h1>Create New Product</h1>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name">
        
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
