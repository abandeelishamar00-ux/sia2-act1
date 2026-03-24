<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h1>Product List</h1>

@foreach($products as $product)
    <p>{{ $product->name }} - {{ $product->price }}</p>
@endforeach

</body>
</html>