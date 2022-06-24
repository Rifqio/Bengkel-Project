<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title> Email/Password Reset</title>
</head>

<body class="">
    <section class="justify-center h-screen">
        <div class="flex lg:my-auto relative lg:h-screen ">
            <div class="hidden w-1/3 bg-gradient-to-tl from-green-500 to-green-200 shadow-2xl lg:flex">
                <div class="m-auto px-10">
                    <img src="/img/account/forget.svg" alt="ini-gambar-regis" class="lg:m-auto p-10" width="70%">
                    <p class="text-center font-bold text-gray-100 text-2xl py-5 pt-10">Email/Password Reset</p>
                </div>
            </div>

            <div class="container justify-center p-20 mx-auto lg:w-2/3 lg:mr-10 lg:my-auto lg:px-40 lg:py-20 my-24">
                <div class=" "><img src="/img/account/forget1.png" alt="Gambar-login1" width="10%" class="mx-auto pb-3"></div>
                <h1 class="text-center text-3xl font-bold py-6 text-gray-600"> Masukkan Email/Password Baru</h1>
                <p class="text-center text-sm font-light py-1 pb-4 ">Silakan masukkan alamat email atau password baru </p>
                <div class="container">
                    <form method="post" action="{{url('update-email-pw')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" value="{{$user->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" name="password" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                              <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="py-3">
                            <button type="submit" class="w-full bg-[#47BF71]  hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-300 justify-center rounded-xl py-2 mt-6 text-white">
                                  Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute inset-x-0 bottom-0 lg:hidden">
            <path fill="#67DA8F" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,229.3C384,224,480,192,576,192C672,192,768,224,864,218.7C960,213,1056,171,1152,149.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>

        </svg>
    </section>

</body>

</html>



