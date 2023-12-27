<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is Products Page</h1>
    <h1> {{ $title }} </h1>
    <h2> {{ $name }} </h2>
    <h3> Details:  {{ $product["name"] }} </h3>
    <h3> Price:  {{ $product["price"] }} </h3>

    @foreach ($products as $product)
        <h3> {{ $product["name"] }} </h3>
        <h3> {{ $product["price"] }} </h3>
    @endforeach
</body>
</html>