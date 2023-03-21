<h1>Products</h1>

<a href="{{ route('products.create') }}">Add Product</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                 <td>
                     <a href="{{ route('products.edit', $product) }}">Edit</a>
                     <form method="post" action="{{ route('products.destroy', $product) }}">
                         @csrf
                         @method('DELETE')
                         <button type="submit">Delete</button>
                     </form>
                 </td>
             </tr>
         @endforeach
     </tbody>
 </table>
