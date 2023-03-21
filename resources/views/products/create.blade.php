<h1>Add Product</h1>

<form method="post" action="{{ route('products.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea><br>

    <label for="price">Price:</label>
    <input type="number" name="price" required><br>

    <button type="submit">Add Product</button>
</form>
