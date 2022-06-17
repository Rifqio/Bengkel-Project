<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Script -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css"> -->
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />

    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bulma.min.css"> -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bulma.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src=""></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablee').DataTable();
        });
    </script>

    <!-- CSS only -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Document</title>
</head>

<body>

    <section id="banner" class="bg-gradient-to-r from-green-200 to-green-600 flex justify-center">
        <div class="w-1/5 self-center">
            <div class="w-[55px] h-[55px] border-2 shadow-sm rounded-lg bg-slate-100  p-2 ml-10"><a href=""><img src="{{ asset('img/arrow.png') }}" alt="" width="" class="object-cover"></a></div>
        </div>
        <div class="pr-36 py-4 w-full">
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
        <div class="container max-w-md p-10 justify-center lg:flex lg:max-w-full  lg:py-5">
            <div class=" rounded-l-xl pl-5 relative">
                <div class="flex justify-center  lg:hidden">
                    <h1 class="uppercase font-bold text-4xl">{{ $item->name }}</h1>
                </div>
                <div class="w-[400px] h-[350px] mx-auto lg:hidden"><img src="{{ asset('img/product/G1.png') }}" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto "></div>
                <div class="bg-gradient-to-l from-green-100 to-green-400 w-1/2 mx-auto rounded-lg lg:hidden  ">
                    <h5 class="flex justify-center text-sm">CURRENT LOWEST PRICE</h5>
                    <h3 class="flex justify-center">RP10.0000.000</h2>
                </div>
                <div class="pt-5">
                    <h1>{{ $item->name }}</h1>
                    <p>Lorem lorem100 ipsum dolor sit amet consectetur adipisicing elit. Iusto doloribus ut fuga, animi repellat laudantium vero, tenetur quia iure repellendus ullam, dolorem id ipsa dignissimos eveniet ab error placeat. Perspiciatis obcaecati omnis consequatur adipisci officiis delectus velit dolor earum tempora esse modi ullam ad, ipsum illum dolore repellat. Natus repellat dolorem deleniti laboriosam repellendus unde,.</p>
                </div>
                <div class="flex justify-end py-3 ">
                    <div class="bg-gradient-to-l from-green-100 to-green-400 rounded-l-lg hidden lg:block justify-end w-1/2  lg:space-y-1 space-y-3 lg:absolute lg:bottom-0 lg:right-0">
                        <h5 class="flex justify-center text-sm">CURRENT LOWEST PRICE</h5>
                        <h3 class="flex justify-center">RP10.0000.000</h2>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block  ">
                <div class="w-[400px] mx-auto">
                    <img src="{{ asset('img/product/G1.png') }}" alt="Gambar-product" width="100%" class=" items-center mx-auto rounded-r-2xl object-fill ">
                </div>
            </div>
        </div>

    </section>

    <section id="deskrip" class="bg-gray-200 mt-20">
        <div class="container py-10">
            <h1 class="py-2">PRODUCT INFORMATION</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At velit dolorum explicabo facilis dignissimos sit ipsam distinctio voluptas tempora id, eaque quis perferendis eius odit iste obcaecati minus! Eos odio veritatis laborum a repellat deleniti omnis molestias voluptates, dolores accusantium magni perferendis sapiente provident ut nam, tempora optio placeat dolorem magnam ipsam. Possimus temporibus facilis ab quam consequuntur nam repellendus perferendis, nesciunt velit ratione a error aperiam officia. Perspiciatis consequatur illum velit soluta recusandae. Veritatis earum molestias, minima incidunt officiis qui? Distinctio mollitia assumenda aspernatur adipisci doloribus deleniti voluptates, dolore harum iusto eos, quos, obcaecati suscipit laboriosam quia repudiandae error.</p>

            <p>{{ $item->desc }}</p>
        </div>
    </section>








    <section id="data-tables" class="my-10">
        <div class="container pb-20">
            <div class="col">
                <table class="table border table-striped" id="tablee" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
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
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
    </html>
