@extends('layout.layout')

@section('container')
    <div class="min-h-screen bg-gray-200 font-openSans">
        <div class="flex justify-center relative items-center justify-items-center pt-6">
            <div class="bg-gradient-to-t from-[#47BF71] to-[#67DA8F] w-[450px] h-[600px] rounded-tl-xl rounded-bl-xl shadow-lg">
                <img class="mt-12 scale-75" src="/img/illustration1.svg" alt="">
               
            </div>
            <div class="bg-white w-[600px] h-[600px] rounded-tr-xl rounded-br-xl shadow-lg">
                <div class="pt-10">
                    <div class="flex justify-center">
                        <div class="bg-gray-100 w-24 h-24 rounded-full">
                            <img class="m-auto pt-4 scale-90" src="/img/user.svg" alt="">
                        </div>
                    </div>
                    <div class="text-center pt-6">
                        <h1 class="text-2xl font-bold">Create Your  Account!</h1>
                        <p class="text-sm font-light pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut egestas <br> nulla magna, in interdum purus tempus at.</p>
                    </div>

                    <div class="text-center pt-5">
                        <form action="">
                            <input class="border border-gray-200 w-[500px] h-10 rounded-md pl-4 mb-5 focus:outline-none focus:border-green-500 focus:ring-green-500 focus:ring-1" type="text" placeholder="Email">
                            <input class="border border-gray-200 w-[500px] h-10 rounded-md pl-4 mb-5 focus:outline-none focus:border-green-500 focus:ring-green-500 focus:ring-1" type="password" placeholder="Password">
                            <input class="border border-gray-200 w-[500px] h-10 rounded-md pl-4 mb-5 focus:outline-none focus:border-green-500 focus:ring-green-500 focus:ring-1" type="password" placeholder=" Repeat Password">
                            {{-- <br> --}}
                            {{-- <input class="bg-green-400 mb-5" type="checkbox" name="checkbox" id="">
                            <label for="checkbox" class="text-sm opacity-50">By clicking continue, you agree to our terms and conditions</label> --}}
                            <div class="ml-px">
                                <p class="text-sm ml-0">By clicking continue you’re aggre to our  <a href="" class="text-green-500">Terms & Conditions </a> and <a href="" class="text-green-500"> Privacy Policy</a></p>
                            </div>
                         
                            <br>
                            <button class="bg-green-10 w-[500px] h-[40px] rounded-md text-white font-semibold hover:bg-green-700" type="submit">Continue</button>
                        </form>
                        <p class="pt-4">Already have an account? <a href="/login" class="text-green-10 hover:text-green-700">Log in</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
