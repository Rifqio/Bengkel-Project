<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>

<body>

    <header class="bg-white fixed  w-full  z-10 py-3 shadow-md opacity-90">
        <div class="flex justify-end">
            <div class="flex border-2 border-ijo shadow-sm rounded-lg  ">
                <div class="rounded-lg">
                    <form action="">
                        <input type="text" placeholder="Search for a part..." class="px-2 py-1 border-none rounded-lg ">
                    </form>
                </div>
                <div class="content-center py-1 bg-slate-300 border rounded-r-lg px-2 "><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <line x1="21" y1="21" x2="15" y2="15"></line>
                    </svg></div>
            </div>
        </div>
    </header>

    <Section id="banner" class="bg-gradient-to-r from-green-600 to-ijo">
        <div class="px-10 pt-8">
            <div class="container mx-auto">
                <h1 class="text-4xl  py-10 text-left font-bold text-white uppercase">Compare Part</h1>
                <p class="w-3/4 md:w-1/2 lg:1/4 text-white font-bold pb-20 ">The comparison function is to find out whether there are differences in variables between one group and another. Comparison is an observation that aims to find ut and/or test the differences between two or more groups.</p>
            </div>
        </div>
    </Section>

    <section id="card text-center">
        <div class="container mx-auto justify-center">
            <h1 class="py-6 text-6xl text-center font-bold text-green-800">Categories</h1>
            <div class="flex flex-wrap justify-center ">
                @foreach($categories as $c)
                <div class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-100 rounded-3xl px-5 py-14 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="{{$c->icon_url}}" alt="" width="30%">
                        </div>
                        <div class="text-center ">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white"> <a href="sparepart/{{ strtolower($c->name) }}"> {{ $c->name }}</a></h1>
                            <h4 class="group-hover:text-slate-100">{{$c->description}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>


</body>

</html>
