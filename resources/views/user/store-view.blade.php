<!--Masih Dumy Bisa Dikasi Template Untuk Tampilan Bengkel-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Bengkel</title>
  </head>
  <body>
    <!--Profile Bengkel-->
    <div class="container">  
        <br><br>
        <h3>Profile Bengkel</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Pemilik</th>
                <th scope="col">Nama Bengkel</th>
                <th scope="col">Telefon Bengkel</th>
                <th scope="col">Alamat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$data->users->name}}</td>
                <td>{{$data->store_name}}</td>
                <td>{{$data->phone_store}}</td>
                <td>{{$data->address}}</td>
            </tr>
            </tbody>
        </table>
        <br><br>
        <h3>Data Item Bengkel</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nama Item</th>
                <th scope="col">Brand</th>
                <th scope="col">Harga</th>
                <th scope="col">Category</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data->item as $i)
                    <tr>
                        <td>{{$i->name}}</td>
                        <td>{{$i->brand}}</td>
                        <td>{{$i->price}}</td>
                        <td>{{$i->category->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>