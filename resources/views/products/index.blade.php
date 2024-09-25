<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap for styling -->
</head>
<body>

<div class="container">
    <h1>Product List</h1>

    <!-- "Add Product" button -->
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    <!-- Check if there are products to display -->
    @if($products->isEmpty())
        <p>No products available. Click the button above to add a new product.</p>
    @else
        <!-- Table to display products -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <!-- Link to edit the product -->
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

</body>
</html>


