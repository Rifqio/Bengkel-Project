<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    @foreach ($items as $item)
        <h1>{{ $item->name }}</h1>
        <p>{{ $item->brand }}</p>
        <a href="/sparepart/{{ $item->slug }}/{{ $item->id }}">Show Details</a>
    @endforeach

</body>

</html>
