<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>reset email password</title>
  </head>
  <body>
    <center><h1>Reset Email Password</h1></center>
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            </ul>
        @endif
    <center>
        <div class="container">
            <form method="post" action="{{url('update-email-pw')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" value="{{$user->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail3" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </center>
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