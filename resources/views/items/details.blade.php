<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>{{ $item->name }}</h1>
    <h1>{{ $item->brand }}</h1>
    <p>{{ $item->desc }}</p>
        
    <div class="container">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Store</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->store_name }}</td>
                            <td>{{ $d->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>


</body>

</html>
