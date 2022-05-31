@extends('admin.adminlayout')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>profile employee</title>
</head>

<body>
  <div class="container">
    
    <br>
    <div class="container">
      <img style="max-width: 50px; height:auto; border-radius:50%;" src="{{ asset('data_user/'.$user->id.'/profile/'.$user->profile_photo_path) }}" alt="{{$user->profile_photo_path}}">
      <div class="fixed-bottom card card-frame vstack gap-2 col-md-5 mx-auto ">
        <div class="card-body">
          {{-- Notifikasi Error --}}
          @if ($errors->any())
          <ul>
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger mx-auto alert-dismissible fade show" role="alert">
              {{ $error }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endforeach
          </ul>
          @endif
          {{-- Notifikasi Update --}}
          @if (session('status_update'))
          <div class="alert alert-success text-center mx-auto alert-dismissible fade show" role="alert">
            {{ session('status_update') }}
            <strong>Success!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <form method="post" action="{{url('profile')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$user->email}}" readonly aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Pengguna</label>
              <input type="text" name="name" class="form-control" id="nama" value="{{$user->name}}">
            </div>
            <div class="mb-3">
              <label for="pp" class="form-label">Update Foto Profile</label>
              <input type="file" name="profile" class="form-control" id="pp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

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