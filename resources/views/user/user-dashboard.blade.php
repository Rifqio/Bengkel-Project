<x-app-layout>
    <div class="relative z-10 bg-white mx-auto justify-center ">
        <div id="show" style="width: 100%; height:500px; z-index:10;">
            {{-- Maps Content --}}
        </div>

        <div class="absolute top-0 mt-5 w-full" style="z-index: 100;" data-aos="fade-down" data-aos-duration="1000">

            <div class=" mb-0 w-1/3 mx-auto">
                <input type="text" id="searchbengkel"
                    class="form-control block w-full px-10 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300 rounded-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none shadow-xl"
                    id="exampleText0" placeholder="Cari Bengkel Terdekat">
            </div>
            <ul id="resultbengkel" class="list-outside hover:list-inside w-1/3 rounded-lg"
                style="background:white; margin-left: auto; margin-right:auto;">
                {{-- Hasil --}}
            </ul>
        </div>


        <div class=" mx-auto z-20 absolute justify-center content-center left-16 right-16">
            <div class="bg-gradient-to-br from-slate-50 to-slate-300 rounded-xl mx-auto">
                <section id=" card text-center " class="sm:container pb-20 relative ">

                    <div class=" -mt-32 z-20 mx-auto">
                        <div class="container mx-auto justify-center pt-10">
                            <div class="flex justify-center">
                                <a href="/sparepart" class="bg-slate-300 rounded-lg"><button type="button"
                                        class=" px-10 py-1 border-2 border-slate-400 text-slate-500 font-semibold text-lg  uppercase rounded-lg hover:bg-slate-400  transition ease-in-out shadow-lg duration-500">Show
                                        All</button></a>
                            </div>


                            <div class="flex flex-wrap justify-center" data-aos="fade-up" data-aos-duration="500">
                                @foreach ($categories as $c)
                                    <div
                                        class="w-[600px] h-[250px] md:w-1/2 lg:w-1/3  xl:w-1/4   bg-green-300 rounded-3xl px-5 py-8 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 m-10">
                                        <a href="sparepart/{{ strtolower($c->name) }}">
                                            <div class=" ">
                                                <div class="flex justify-center"><img src="{{ $c->icon_url }}"
                                                        alt="" width="30%">
                                                </div>
                                                <div class="text-center ">
                                                    <h1 class="p-3 text-2xl font-bold group-hover:text-white">
                                                        {{ $c->name }}</h1>
                                                    <h4 class="group-hover:text-slate-100">{{ $c->description }}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </section>

                {{-- TOMBOL --}}
                <div class="container py-20 pb-60 mx-auto">
                    <div class="flex flex-wrap xl:flex justify-around">
                        <div data-aos="fade-up-right" data-aos-duration="700">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"
                                class="bg-blue-400 px-10 py-3 border-2 border-blue-300 text-white font-semibold text-lg  uppercase rounded-lg hover:bg-blue-300  transition ease-in-out shadow-lg mb-10 md:mb-0">Bengkel
                                Terdekat</button>
                        </div>
                        <div data-aos="fade-up-left" data-aos-duration="500">
                            <a href="/login"><button type="button"
                                    class="px-10 py-3 border-2 bg-red-600 border-red-500 text-white font-semibold text-lg leading-tight uppercase rounded-lg hover:bg-red-500 focus:outline-none focus:ring-0 transition  ease-in-out shadow-lg">Login
                                    / Register Sebagai Mitra</button></a>
                        </div>
                    </div>
                </div>

                <div class="container mx-auto bg-[#FCF9C6] py-20 flex ">
                    <div class="w-1/2 mx-auto align-middle self-center p-20 space-y-6">
                        <p class="uppercase font-extrabold text-2xl text-[#C7D36F] text-center ">Bengkel terdekat
                        </p>
                        <p class="align-middle text-md text-center space-y-2">Kita memiliki Fitur untuk mendapatkan
                            begnkel terdekat
                            Website ini menciptakan kemudahan bagi masyarakat pengguna website ini yang memerlukan
                            <br> informasi posisi bengkel terdekat dan informasi perjual belian sparepart terdekat.

                        </p>
                        <div class="mx-auto flex justify-center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"
                                class="bg-black fill-lime-300 px-10 py-3 border-2 border-lime-300 text-white font-semibold text-lg  uppercase rounded-lg hover:bg-lime-300 shadow-xl  transition ease-in-out shadow-lg mb-10 md:mb-0 duration-700">Bengkel
                                Terdekat</button>
                        </div>
                    </div>
                    <div class="bg-[#E0DECA] rounded-l-xl w-1/2  self-center text-right h-full relative py-16">
                        <h1 class="font-allison font-semibold text-6xl -mt-10 pr-5 ">Bengkel AE</h1>
                        <p class="text-sm leading-relaxed p-5">Bengkel AE adalah aplikasi berbasis website grati
                            yang
                            dibuat dengan tujuan membantu pegguna menemukan dan mendapatkan informasi seputar
                            bengkel dan sparepart automotif. Kami bermmitra dengan pemilik bengkel untuk mendapatkan
                            onformasi sparepart yang mereka perjual belikan, dan lokasi bengkel tersebut, untuk
                            selanjutnya dipublikasikan kepada pengguna melalui website ini. </p>
                        <img src="img/dashboard/atas.png" alt="" class="absolute -mx-14 -mt-5"
                            style="width:40% ;">
                    </div>
                </div>

                <div class="container mx-auto py-16 mt-10">
                    <div class="mx-auto py-6 pt-10">
                        <p class="uppercase text-6xl font-roboto font-extrabold text-center text-[#C7D36F]">
                            Testimoni</p>
                    </div>
                    <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
                        <div class="w-full relative flex items-center justify-center">
                            <button aria-label="slide backward"
                                class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer bg-white rounded-full p-2"
                                id="prev">
                                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                                <div id="slider"
                                    class="h-full flex lg:gap-4 md:gap-3 gap-7 items-center justify-start transition ease-out duration-700">

                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto px-32 mx-16 ">
                                        <img src="img/product/G1.png" alt="black chair and white table"
                                            class="object-cover object-center w-full h-72 rounded-xl " />
                                        <div
                                            class="bg-[#C7D36F] shadow-2xl  absolute w-full h-full p-6 flex rounded-xl">
                                            <div class="w-1/3">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                    alt="black chair and white table" class="rounded-xl -ml-16 -mt-4" />
                                                <h2
                                                    class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                                    Catalog 1</h2>
                                                <div class=" items-end pb-6">
                                                    <h3
                                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                        Minimal Interior</h3>
                                                </div>
                                            </div>
                                            <div class="w-2/3">
                                                <p class="p-10 -ml-8">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Magnam
                                                    vel temporibus quia placeat nobis ad corporis aspernatur aperiam
                                                    iusto nisi?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto px-32 mx-16 ">
                                        <img src="img/product/G1.png" alt="black chair and white table"
                                            class="object-cover object-center w-full h-72 rounded-xl " />
                                        <div
                                            class="bg-[#C7D36F] shadow-2xl  absolute w-full h-full p-6 flex rounded-xl">
                                            <div class="w-1/3">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                    alt="black chair and white table"
                                                    class="rounded-xl -ml-16 -mt-4" />
                                                <h2
                                                    class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                                    Catalog 1</h2>
                                                <div class=" items-end pb-6">
                                                    <h3
                                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                        Minimal Interior</h3>
                                                </div>
                                            </div>
                                            <div class="w-2/3">
                                                <p class="p-10 -ml-8">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Magnam
                                                    vel temporibus quia placeat nobis ad corporis aspernatur aperiam
                                                    iusto nisi?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto px-32 mx-16 ">
                                        <img src="img/product/G1.png" alt="black chair and white table"
                                            class="object-cover object-center w-full h-72 rounded-xl " />
                                        <div
                                            class="bg-[#C7D36F] shadow-2xl  absolute w-full h-full p-6 flex rounded-xl">
                                            <div class="w-1/3">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                    alt="black chair and white table"
                                                    class="rounded-xl -ml-16 -mt-4" />
                                                <h2
                                                    class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                                    Catalog 1</h2>
                                                <div class=" items-end pb-6">
                                                    <h3
                                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                        Minimal Interior</h3>
                                                </div>
                                            </div>
                                            <div class="w-2/3">
                                                <p class="p-10 -ml-8">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Magnam
                                                    vel temporibus quia placeat nobis ad corporis aspernatur aperiam
                                                    iusto nisi?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto px-32 mx-16 ">
                                        <img src="img/product/G1.png" alt="black chair and white table"
                                            class="object-cover object-center w-full h-72 rounded-xl " />
                                        <div
                                            class="bg-[#C7D36F] shadow-2xl  absolute w-full h-full p-6 flex rounded-xl">
                                            <div class="w-1/3">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                    alt="black chair and white table"
                                                    class="rounded-xl -ml-16 -mt-4" />
                                                <h2
                                                    class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                                    Catalog 1</h2>
                                                <div class=" items-end pb-6">
                                                    <h3
                                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                        Minimal Interior</h3>
                                                </div>
                                            </div>
                                            <div class="w-2/3">
                                                <p class="p-10 -ml-8">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Magnam
                                                    vel temporibus quia placeat nobis ad corporis aspernatur aperiam
                                                    iusto nisi?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto px-32 mx-16 ">
                                        <img src="img/product/G1.png" alt="black chair and white table"
                                            class="object-cover object-center w-full h-72 rounded-xl " />
                                        <div
                                            class="bg-[#C7D36F] shadow-2xl  absolute w-full h-full p-6 flex rounded-xl">
                                            <div class="w-1/3">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                    alt="black chair and white table"
                                                    class="rounded-xl -ml-16 -mt-4" />
                                                <h2
                                                    class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                                    Catalog 1</h2>
                                                <div class=" items-end pb-6">
                                                    <h3
                                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                        Minimal Interior</h3>
                                                </div>
                                            </div>
                                            <div class="w-2/3">
                                                <p class="p-10 -ml-8">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Magnam
                                                    vel temporibus quia placeat nobis ad corporis aspernatur aperiam
                                                    iusto nisi?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto px-32 mx-16 ">
                                        <img src="img/product/G1.png" alt="black chair and white table"
                                            class="object-cover object-center w-full h-72 rounded-xl " />
                                        <div
                                            class="bg-[#C7D36F] shadow-2xl  absolute w-full h-full p-6 flex rounded-xl">
                                            <div class="w-1/3">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                    alt="black chair and white table"
                                                    class="rounded-xl -ml-16 -mt-4" />
                                                <h2
                                                    class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                                    Catalog 1</h2>
                                                <div class=" items-end pb-6">
                                                    <h3
                                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                        Minimal Interior</h3>
                                                </div>
                                            </div>
                                            <div class="w-2/3">
                                                <p class="p-10 -ml-8">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Magnam
                                                    vel temporibus quia placeat nobis ad corporis aspernatur aperiam
                                                    iusto nisi?</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button aria-label="slide forward"
                                class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bg-white rounded-full p-2"
                                id="next">
                                <svg class="dark:text-gray-100 " width="8" height="14" viewBox="0 0 8 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#FCF9C6" fill-opacity="1"
                            d="M0,288L48,250.7C96,213,192,139,288,144C384,149,480,235,576,245.3C672,256,768,192,864,176C960,160,1056,192,1152,224C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                        </path>
                    </svg>
                    <div class="container bg-[#FCF9C6]">
                        <div class="mx-auto pb-6 ">
                            <p class="uppercase text-6xl font-roboto font-extrabold text-left pl-20 text-[#C7D36F]">
                                our product</p>
                        </div>
                        <section id="card text-center">
                            <div class="container mx-auto justify-center pb-10">
                                <div class="flex flex-wrap justify-center ">
                                    <div class="w-[300px] py-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 my-5 px-5">
                                        <div
                                            class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105 ">
                                            <div>
                                                <div class="flex justify-center">

                                                    <img src="{{ asset('img/product/G1.png') }}"
                                                        class="rounded w-24 h-24" alt="Gambar-product"
                                                        width="80%">

                                                </div>
                                                <div class="text-center ">
                                                    <h1 class="p-1 text-xl font-bold group-hover:text-white"
                                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                        REM</h1>
                                                    {{-- <h4 class="group-hover:text-slate-100">Rp {{ $item->price }}</h4> --}}
                                                </div>
                                                <div
                                                    class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
                                                    <a href="/">
                                                        <h3 class="uppercase font-bold">show details</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-[300px] py-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 my-5 px-5">
                                        <div
                                            class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105 ">
                                            <div>
                                                <div class="flex justify-center">

                                                    <img src="{{ asset('img/product/G1.png') }}"
                                                        class="rounded w-24 h-24" alt="Gambar-product"
                                                        width="80%">

                                                </div>
                                                <div class="text-center ">
                                                    <h1 class="p-1 text-xl font-bold group-hover:text-white"
                                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                        REM</h1>
                                                    {{-- <h4 class="group-hover:text-slate-100">Rp {{ $item->price }}</h4> --}}
                                                </div>
                                                <div
                                                    class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
                                                    <a href="/">
                                                        <h3 class="uppercase font-bold">show details</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-[300px] py-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 my-5 px-5">
                                        <div
                                            class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105 ">
                                            <div>
                                                <div class="flex justify-center">

                                                    <img src="{{ asset('img/product/G1.png') }}"
                                                        class="rounded w-24 h-24" alt="Gambar-product"
                                                        width="80%">

                                                </div>
                                                <div class="text-center ">
                                                    <h1 class="p-1 text-xl font-bold group-hover:text-white"
                                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                        REM</h1>
                                                    {{-- <h4 class="group-hover:text-slate-100">Rp {{ $item->price }}</h4> --}}
                                                </div>
                                                <div
                                                    class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
                                                    <a href="/">
                                                        <h3 class="uppercase font-bold">show details</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-[300px] py-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 my-5 px-5">
                                        <div
                                            class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105 ">
                                            <div>
                                                <div class="flex justify-center">

                                                    <img src="{{ asset('img/product/G1.png') }}"
                                                        class="rounded w-24 h-24" alt="Gambar-product"
                                                        width="80%">

                                                </div>
                                                <div class="text-center ">
                                                    <h1 class="p-1 text-xl font-bold group-hover:text-white"
                                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                        REM</h1>
                                                    {{-- <h4 class="group-hover:text-slate-100">Rp {{ $item->price }}</h4> --}}
                                                </div>
                                                <div
                                                    class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
                                                    <a href="/">
                                                        <h3 class="uppercase font-bold">show details</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end px-36 -mt-7"><a href="">
                                        <p class="text-lg underline ">see more ...</p>
                                    </a></div>
                            </div>
                        </section>


                    </div>
                    <div class="rotate-180"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#FCF9C6" fill-opacity="1"
                                d="M0,288L48,250.7C96,213,192,139,288,144C384,149,480,235,576,245.3C672,256,768,192,864,176C960,160,1056,192,1152,224C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                            </path>
                        </svg></div>
                </div>


                <div class="container pb-20">
                    <div class="owl-carousel overflow-clip" style="display:flex ">

                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>
                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>
                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>
                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>
                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>
                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>
                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>
                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>
                        <div> <img src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75  transition ease-in-out duration-500 shadow-xl max-w-xl ">
                        </div>



                    </div>
                </div>
            </div>

            {{-- <div class="container mx-auto">
                        <div class="bg-white shadow-lg rounded-xl mx-10 ">
                            <div class="lg:p-10 py-10  text-center mx-20">
                                <h1 class="font-allison font-semibold text-8xl py-10">Bengkel AE</h1>
                                <p class="text-xl leading-relaxed ">Bengkel AE adalah aplikasi berbasis website grati
                                    yang dibuat dengan tujuan membantu pegguna menemukan dan mendapatkan informasi
                                    seputar bengkel dan sparepart automotif. Kami bermmitra dengan pemilik bengkel untuk
                                    mendapatkan onformasi sparepart yang mereka perjual belikan, dan lokasi bengkel
                                    tersebut, untuk selanjutnya dipublikasikan kepada pengguna melalui website ini.
                                    Website ini menciptakan kemudahan bagi masyarakat pengguna website ini yang
                                    memerlukan informasi posisi bengkel terdekat dan informasi perjualbelian sparepart
                                    terdekat, karena kami juga membuat komperasi harga spesifikasi dari tiap-tiap
                                    sparepart di tiap-tiap bengkel.</p>
                            </div>
                        </div>
                    </div> --}}

            <div class="container mx-auto py-20">
                <div class="flex flex-wrap justify-center">
                    <div class="xl:flex ">
                        <div class="pb-10 group" data-aos="flip-left" data-aos-duration="1000"><img
                                src="img/Team/rozy.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl ">
                            <p
                                class="text-white font-semibold text-center text-xl align-text-top group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Rozy Nur Fatmala</p>
                        </div>
                        <div class="pb-10 group" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                            <img src="img/Team/natan.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-700 shadow-xl ">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Nathan Ari Soetopo</p>
                        </div>
                    </div>
                    <div class="xl:flex">
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000">
                            <img src="img/Team/shalom.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Shallomita Rembulan</p>
                        </div>
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="900" data-aos-duration="1000">
                            <img src="img/Team/paksi.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Satria Buana Paksi</p>
                        </div>
                    </div>
                    <div class=" md:block xl:flex">
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="1200" data-aos-duration="1000">
                            <img src="img/Team/syita.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Syi'ta Al-Mar'atush S</p>
                        </div>
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="1500" data-aos-duration="1000">
                            <img src="img/Team/reza.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Reza Richard M S</p>
                        </div>
                    </div>
                    <div class="xl:flex 2xl:flex lg:block md:flex ">
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="1800" data-aos-duration="1000">
                            <img src="img/Team/rifqi.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Rifqi Oktario</p>
                        </div>
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="2100" data-aos-duration="1000">
                            <img src="img/Team/nizam.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Nizamuddin Aulia</p>
                        </div>
                    </div>
                    <div class="flex md:flex sm:block ">
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="2500" data-aos-duration="1000">
                            <img src="img/Team/samuel.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Samuel Steven P H</p>
                        </div>
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="2800" data-aos-duration="1000">
                            <img src="img/Team/sabila.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Sabila Hayati N R</p>
                        </div>
                    </div>
                    <div class="xl:flex">
                        <div class="pb-5 group" data-aos="flip-left" data-aos-delay="3000" data-aos-duration="1000">
                            <img src="img/Team/regita.jpg" alt=""
                                class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                            <p
                                class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">
                                Regita Cahya Wulan</p>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <footer class="bg-black pt-12 pb-12">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full px-32 mb-12 lg:w-1/2">
                            <div class="flex p-5 align-middle inline-block  ">
                                <img src="img/footer/Instagram.png" alt="" class=""
                                    style="width:10% ;">
                                <p class="text-white pl-5 my-auto ">@Bengkel_AE</p>
                            </div>
                            <div class="flex p-5 align-middle inline-block">
                                <img src="img/footer/gmail.png" alt="" class="" style="width:10% ;">
                                <p class="text-white pl-5 my-auto">Bengkel_AE@gmail.com</p>
                            </div>
                            <div class="flex p-5 align-middle inline-block">
                                <img src="img/footer/Phone.png" alt="" class="" style="width:10% ;">
                                <p class="text-white pl-5 my-auto">+62 8888 8888</p>
                            </div>
                        </div>
                        <div class="w-full my-auto px-32 border-l-4 lg:w-1/2">
                            <p class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim
                                ratione nisi culpa obcaecati nulla tenetur similique voluptates. Aliquid accusamus,
                                reprehenderit asperiores, dolore dolor voluptas sint eum ipsam, ad et quis.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Modal -->
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none">
                    <div
                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                        <div
                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                            <h5 class="text-xl font-medium leading-normal text-gray-800"
                                id="exampleModalScrollableLabel">
                                Bengkel Terdekat
                            </h5>
                            <button type="button"
                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body relative p-4" id='rekomen'>

                        </div>
                        <div
                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                            <button type="button"
                                class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });
    </script>
    <script>
        let defaultTransform = 0;

        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);

        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script>
        //Option
        const User = L.divIcon({
            html: '<i class="fa fa-crosshairs fa-3x"></i>',
            iconSize: [20, 20],
            className: 'myDivIcon'
        });
        const fontAwesomeIcon = L.divIcon({
            html: '<i class="fa fa-map-marker-alt fa-3x"></i>',
            iconSize: [20, 20],
            className: 'myDivIcon'
        });
    </script>
    <script>
        var loadMap = function(id) {
            var data = {!! json_encode($location) !!}
            var map = L.map(id, {
                wheelPxPerZoomLevel: 150
            });
            var tile_url =
                'https://api.mapbox.com/styles/v1/nathansoetopo/cl27uglwc009q14lnw7oiv50v/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoibmF0aGFuc29ldG9wbyIsImEiOiJjbDI3dWFhNWUwMWJmM2lzejAxZXRrbncxIn0.sd9zf5aYlRhrFf5Bxp6ySQ';
            var layer = L.tileLayer(tile_url, {
                attribution: 'BengkelAE',
                maxZoom: 18,
            });
            map.addLayer(layer);
            map.locate({
                    setView: true,
                    watch: false
                })
                .on('locationfound', function(e) {
                    var marker = [];
                    var distance = [];
                    var namestore = [];
                    var idstore = [];
                    var i;
                    user = L.marker([e.latitude, e.longitude], {
                        icon: User,
                    }).addTo(map);
                    var circle = L.circle([e.latitude, e.longitude], e.accuracy / 10, {
                        weight: 1,
                        color: 'blue',
                        fillColor: '#cacaca',
                        fillOpacity: 0.2
                    });
                    map.addLayer(circle);
                    for (var i = 0; i < data.length; i++) {
                        marker[i] = new L.marker([data[i][1], data[i][2]], {
                            win_url: data[i][3],
                            icon: fontAwesomeIcon,
                        }).bindPopup("Bengkel " + data[i][0]);
                        from = marker[i].getLatLng();
                        to = user.getLatLng();
                        marker[i].addTo(map);
                        marker[i].on('click', onClick);
                        distance[i] = from.distanceTo(to).toFixed(0) / 1000;
                        namestore[i] = data[i][0];
                        idstore[i] = data[i][3];
                    }
                    for (var i = 0; i < marker.length; i++) {
                        if (distance[i] <= 1) {
                            var button = document.createElement("a");
                            button.type = 'button';
                            button.innerHTML = '<b>' + namestore[i] + '</b><br>' + distance[i] + 'Km';
                            button.style.cssText += 'margin:3px; margin-bottom:10px;';
                            button.href = '{{ url('store-view') }}/' + idstore[i] + '/show';
                            button.className +=
                                "bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                            document.getElementById("rekomen").appendChild(button);
                        }
                    }

                    function onClick(e) {
                        window.location.href = '{{ url('store-view') }}/' + this.options.win_url + '/show';
                    }
                })
                .on('locationerror', function(e) {
                    console.log(e);
                    alert("Location access denied.");
                });
        };
        loadMap('show');
    </script>
    <script>
        function fetch_user_data(query = '') {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/search-bengkel-ajax') }}",
                method: 'POST',
                data: {
                    query: query
                },
                success: function(response) {
                    $('#resultbengkel').html(response);
                    console.log(response);
                }
            })
        }
        $(document).on('keyup', '#searchbengkel', function() {
            var word = $(this).val();
            fetch_user_data(word);
        });
    </script>
</x-app-layout>
