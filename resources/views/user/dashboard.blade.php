@extends('user.layout.user-layout')
@section('content')

    <section id="banner" class="bg-gradient-to-r from-green-600 to-ijo">
        <div class="px-10 pt-8">
            <div class="container mx-auto">
                <h1 class="text-4xl  py-10 text-left font-bold text-white uppercase">Compare Part</h1>
                <p class="w-3/4 md:w-1/2 lg:1/4 text-white font-bold pb-20 ">The comparison function is to find out whether
                    there are differences in variables between one group and another. Comparison is an observation that aims
                    to find ut and/or test the differences between two or more groups.</p>
            </div>
        </div>
    </section>

    <section id="card text-center">
        <div class="container mx-auto justify-center">
            <h1 class="py-6 text-6xl text-center font-bold text-green-800">Categories</h1>
            <div class="flex flex-wrap justify-center ">

                @foreach ($categories as $cat)
                    <a href="sparepart/{{ $cat->slug }}" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                        <div
                            class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-14 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                            <div class="flex justify-center"><img src="{{ $cat->icon_url }}" alt="" width="30%">
                            </div>
                            <div class="text-center ">
                                <h1 class="p-3 text-2xl font-bold group-hover:text-white">{{ $cat->name }}</h1>
                                <h4 class="group-hover:text-slate-100">{{ $cat->description }}</h4>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

        </div>
    </section>

    
@endsection
