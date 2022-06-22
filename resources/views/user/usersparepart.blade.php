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

                <a href="" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-14 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="img/sparepart/Brake.svg" alt="" width="30%">
                        </div>
                        <div class="text-center ">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="img/sparepart/Shock Absorber2.svg" alt="">
                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Chassis and Suspension</h1>
                            <h4 class="group-hover:text-slate-100">Dampen various vibrations generated from the road surface</h4>
                        </div>
                    </div>
                </a>
                <a href="" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 w-[400px] h-[400px] ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-12 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="img/sparepart/Gearbox3.svg" alt="">

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Drivetrain</h1>
                            <h4 class="group-hover:text-slate-100">Dampen various vibrations generated from the road surface</h4>
                        </div>
                    </div>
                </a>
                <a href="" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-14 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="img/sparepart/Input-Component4.svg" alt="">

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Electronics</h1>
                            <h4 class="group-hover:text-slate-100">help to keep your car running at its full potential</h4>
                        </div>
                    </div>
                </a>
                <a href="" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-14 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="img/sparepart/Exhaust-Pipe5.svg" alt="">
                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Exhaust</h1>
                            <h4 class="group-hover:text-slate-100">Find all kinds of exhaust</h4>
                        </div>
                    </div>
                </a>
                <a href="" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="img/sparepart/Engine-Oil6.svg" alt="">

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Engine Oil</h1>
                            <h4 class="group-hover:text-slate-100">Find perfect oil for your car</h4>
                        </div>
                    </div>
                </a>
                <a href="" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="img/sparepart/Wheel7.svg" alt="">

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Wheels and
                                Tyres</h1>
                            <h4 class="group-hover:text-slate-100">To help you choose, wheels and tyres</h4>
                        </div>
                    </div>
                </a>
                <a href="" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-12 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                        <div class="flex justify-center"><img src="img/sparepart/Toolbox8.svg" alt="">
                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Tools</h1>
                            <h4 class="group-hover:text-slate-100">Tools for repairing and maintenance your car</h4>
                        </div>
                    </div>
                </a>



            </div>

        </div>
    </section>


</body>

</html>