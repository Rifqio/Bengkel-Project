<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Login</title>
</head>

<body class="">
    <section class="justify-center h-screen">
        <div class="flex lg:my-auto relative lg:h-screen ">
            <div class="hidden w-1/3 bg-gradient-to-tl from-green-500 to-green-200 shadow-2xl lg:flex">
                <div class="m-auto px-10">
                    <img src="/img/account/forget.svg" alt="ini-gambar-regis" class="lg:m-auto p-10" width="70%">
                    <p class="text-center font-bold text-gray-100 text-2xl py-5 pt-10">Forgot Your Password ?</p>
                    <p class="text-center font-light text-white ">Enter your email and we'll send you a link to get back into your account.</p>
                </div>
            </div>
            <div class="container justify-center p-20 mx-auto lg:w-2/3 lg:mr-10 lg:my-auto lg:px-40 lg:py-20 my-24">
                <div class=" "><img src="/img/account/forget1.png" alt="Gambar-login1" width="10%" class="mx-auto pb-3"></div>

                <h1 class="text-center text-3xl font-bold py-6 text-gray-600">Forgot Password ?</h1>
                <p class="text-center text-sm font-light py-1 pb-4 ">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                <label class="relative block py-2 w-full">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Email ..." type="text" name="search" />
                </label>


                <div class="py-3">
                    <button class="w-full bg-[#47BF71]  hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-300 justify-center rounded-xl py-2 mt-6 text-white">
                        <a href="" class="text-center">
                            Send Login Link
                        </a>
                    </button>
                </div>
                <div class="flex justify-center">
                    <p>Already have an account?</p>
                    <a href="" class="text-green-400 hover:text-green-700 active:text-green-800 pl-2">login</a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute inset-x-0 bottom-0 lg:hidden">
            <path fill="#67DA8F" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,229.3C384,224,480,192,576,192C672,192,768,224,864,218.7C960,213,1056,171,1152,149.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>

        </svg>
    </section>

</body>

</html>