    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Script -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tablee').DataTable();
            });
        </script>

        <!-- CSS only -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>

        <section id="banner" class="bg-gradient-to-r from-green-200 to-green-600">
            <div class="px-36 py-4">
                <div class="flex border-2 shadow-sm rounded-lg bg-slate-100">
                    <div class="content-center py-3 rounded-l-lg px-2 "><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg></div>
                    <div class="rounded-lg w-full ">
                        <form action="">
                            <input type="text" placeholder="Search for a part..." class="py-3 border-none rounded-r-lg w-full bg-slate-100  focus:ring-green-500 ">
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <section id="Konten">
            <div class="container max-w-md p-10 justify-center lg:flex lg:max-w-full lg:p-0 lg:py-5">
                <div>
                    <div class="flex justify-center  lg:hidden">
                        <h1 class="uppercase font-bold text-4xl">{{ $item->name }}</h1>
                    </div>
                    <div class="w-[400px] h-[350px] mx-auto lg:hidden"><img src="{{ asset('img/product/G1.png') }}" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto "></div>
                    <div class="bg-gradient-to-l from-green-100 to-green-400 w-1/2 mx-auto rounded-lg lg:hidden">
                        <h5 class="flex justify-center text-sm">CURRENT LOWEST PRICE</h5>
                        <h3 class="flex justify-center">RP10.0000.000</h2>
                    </div>
                    <div class="pt-5">
                        <h1>{{ $item->name }}</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto doloribus ut fuga, animi repellat laudantium vero, tenetur quia iure repellendus ullam, dolorem id ipsa dignissimos eveniet ab error placeat. Perspiciatis obcaecati omnis consequatur adipisci officiis delectus velit dolor earum tempora esse modi ullam ad, ipsum illum dolore repellat. Natus repellat dolorem deleniti laboriosam repellendus unde,.</p>
                    </div>
                    <div class="bg-gradient-to-l from-green-100 to-green-400 rounded-l-lg hidden lg:block justify-end relative bottom-0 left-0">
                        <h5 class="flex justify-center text-sm">CURRENT LOWEST PRICE</h5>
                        <h3 class="flex justify-center">RP10.0000.000</h2>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="w-[400px] h-[350px] mx-auto"><img src="{{ asset('img/product/G1.png') }}" alt="Gambar-product" width="100%" class=" items-center mx-auto "></div>
                </div>
            </div>

        </section>





        <h1>{{ $item->brand }}</h1>
        <p>{{ $item->desc }}</p>

        <div class="container">
            <div class="col">
                <table class="" id="tablee">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Store</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->store_name }}</td>
                            <td>{{ $d->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>


    </body>

    </html>