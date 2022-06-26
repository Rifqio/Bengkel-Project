<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataTables </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Library element -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    
    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1.5rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #ebf4ff;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
            
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
            
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #a3e635 !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #d9f99d  !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>

    <!-- <style>
        [x-cloak] {
            display: none;
        }

        [type="checkbox"] {
            box-sizing: border-box;
            padding: 0;
        }

        .form-checkbox {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            flex-shrink: 0;
            color: currentColor;
            background-color: #fff;
            border-color: #e2e8f0;
            border-width: 1px;
            border-radius: 0.25rem;
            height: 1.2em;
            width: 1.2em;
        }

        .form-checkbox:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style> -->

</head>

<body>

    <!-- Navbar -->
    <section id="banner" class="bg-gradient-to-r from-green-200 to-green-600 flex justify-center">
        <div class="w-1/5 self-center">
            <div class="w-[55px] h-[55px] border-2 shadow-sm rounded-lg bg-slate-100  p-2 ml-10"><a href=""><img src="{{ asset('img/arrow.png') }}" alt="" width="" class="object-cover"></a></div>
        </div>
        <div class=" px-10 lg:pr-32 py-4 w-full mx-auto">
            <div class="flex border-2 shadow-sm rounded-lg bg-slate-100 justify-center">
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

    <!-- Hero -->
    <section id="Konten" class=" pb-20 bg-slate-50" >
        <div class="container max-w-md p-10 justify-center lg:flex lg:max-w-full  lg:py-5 mx-auto ">
            <div class=" rounded-l-xl px-5 relative max-w-screen-md w-full shadow-green-200 shadow-lg bg-white ">
                <div class="flex justify-center  lg:hidden">
                    <h1 class="uppercase font-bold text-4xl pb-5">{{ $item->name }}</h1>
                </div>

                <div class="w-auto mx-auto lg:hidden pb-7"><img src="{{ asset('img/product/G1.png') }}" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto "></div>
                <div class="bg-gradient-to-l from-green-100 to-green-400 w-5/6 mx-auto rounded-lg lg:hidden  ">

                @if ( $item->image === null )
                    <img src="/img/product/placeholder.jpg" alt=""  width="100%" class="rounded-xl items-center mx-auto ">
                @else
                <div class="w-[400px] h-[350px] mx-auto lg:hidden">
                    <img src="{{ asset('storage/'. $item->image) }}" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto ">
                </div>
                @endif
                <div class="bg-gradient-to-l from-green-100 to-green-400 w-1/2 mx-auto rounded-lg lg:hidden  ">

                    <h5 class="flex justify-center text-sm">Average Price</h5>
                    <h3 class="flex justify-center">{{ $item->price }}</h2>
                </div>
                <div class="p-10 ">
                    <h1 class="text-2xl pb-2 font-semibold">{{ $item->name }}</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. lorem </p>
                </div>
                <div class="flex justify-end py-3 ">
                    <div class="bg-gradient-to-l from-green-100 to-green-400 rounded-l-lg hidden lg:block justify-end w-1/2  lg:space-y-1 space-y-3 lg:absolute lg:bottom-0 lg:right-0 mb-2 p-2">
                        <h5 class="flex justify-left text-md uppercase font-semibold pl-2">Current Lowest Price</h5>
                        <h3 class="flex justify-left pl-5 ">Rp. {{ $item->price }}</h2>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block shadow-green-200 shadow-lg rounded-r-2xl">
                <div class="w-[400px] mx-auto">
                    @if ( $item->image === null )
                        <img src="/img/product/placeholder.jpg" alt="" width="100%" class=" items-center mx-auto rounded-r-2xl object-fill " >
                    @else
                        <img src="{{ asset('storage/'. $item->image) }}" alt="Gambar-product" width="100%" class=" items-center mx-auto rounded-r-2xl object-fill ">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Information -->
    <section id="deskrip" class="bg-gray-200 ">
        <div class="container p-10 lg:mx-20  ">
            <h1 class="py-2 mb-5 uppercase font-bold lg:text-5xl text-3xl font-inconsolata border-b-2 border-gray-500 text-gray-500 w-3/4">Product Information</h1> 
            <hr>
            <p class="py-2">Ukuran: 20cm</p>
            <p class="py-2">Manufaktur: USA</p>

            <p class="py-2">{{ $item->desc }}</p>
        </div>
    </section>



    <!-- Trigger Modal -->
    <div class="container flex justify-center mx-auto py-24">
        <button type="button" class="inline-block px-6 py-2.5 bg-green-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-500 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            Check Available Store
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none modal-lg">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        Ini Judul
                    </h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4 bg-green-50">

                    <!-- modal content -->
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded-xl shadow-xl bg-white ">


                        <table id="example" class="stripe hover rounded-b-xl " style="width:100%; padding-top: 1em;  padding-bottom: 1em; ">
                                        <thead class="bg-green-100 rounded-xl ">
                                            <tr class="rounded-3xl">
                                                <th data-priority="1" class="px-6 py-2 text-xs text-gray-500 font-roboto rounded-tl-xl">No</th>
                                                <th data-priority="2" class="px-6 py-2 text-xs text-gray-500 font-roboto ">Name</th>
                                                <th data-priority="3" class="px-6 py-2 text-xs text-gray-500 font-roboto">Store</th>
                                                <th data-priority="4" class="px-6 py-2 text-xs text-gray-500 font-roboto rounded-tr-xl">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                        @foreach ($data as $d)
                                            <tr>
                                                <td class="">{{ $loop->iteration }}</td>
                                                <td>{{ $d->name }}</td>
                                                <td><a href="/store-view/{{ $d->id }}/show">{{ $d->store_name }}</a></td>
                                                <td class="">{{ $d->price }}</td>
                                            </tr>
                                            @endforeach


                                        </tbody>

                                    </table>
                        <!-- <div class="container mx-auto py-6 px-4" x-data="datatables()" x-cloak>
                            <h1 class="text-3xl py-4 border-b mb-10">Datatable</h1>

                            <div x-show="selectedRows.length" class="bg-teal-200 fixed top-0 left-0 right-0 z-40 w-full shadow">
                                <div class="container mx-auto px-4 py-4">
                                    <div class="flex md:items-center">
                                        <div class="mr-4 flex-shrink-0">
                                            <svg class="h-8 w-8 text-teal-600" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div x-html="selectedRows.length + ' rows are selected'" class="text-teal-800 text-lg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 flex justify-between items-center">
                                <div class="flex-1 pr-4">
                                    <div class="relative md:w-1/3">
                                        <input type="search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Search...">
                                        <div class="absolute top-0 left-0 inline-flex items-center p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                <circle cx="10" cy="10" r="7" />
                                                <line x1="21" y1="21" x2="15" y2="15" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="shadow rounded-lg flex">
                                        <div class="relative">
                                            <button @click.prevent="open = !open" class="rounded-lg inline-flex items-center bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-2 md:px-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:hidden" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                    <path d="M5.5 5h13a1 1 0 0 1 0.5 1.5L14 12L14 19L10 16L10 12L5 6.5a1 1 0 0 1 0.5 -1.5" />
                                                </svg>
                                                <span class="hidden md:block">Display</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                    <polyline points="6 9 12 15 18 9" />
                                                </svg>
                                            </button>

                                            <div x-show="open" @click.away="open = false" class="z-40 absolute top-0 right-0 w-40 bg-white rounded-lg shadow-lg mt-12 -mr-1 block py-1 overflow-hidden">
                                                <template x-for="heading in headings">
                                                    <label class="flex justify-start items-center text-truncate hover:bg-gray-100 px-4 py-2">
                                                        <div class="text-teal-600 mr-3">
                                                            <input type="checkbox" class="form-checkbox focus:outline-none focus:shadow-outline" checked @click="toggleColumn(heading.key)">
                                                        </div>
                                                        <div class="select-none text-gray-700" x-text="heading.value"></div>
                                                    </label>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative" style="height: 405px;">
                                <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                                    <thead>
                                        <tr class="text-left">
                                            <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
                                                <label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
                                                    <input type="checkbox" class="form-checkbox focus:outline-none focus:shadow-outline" @click="selectAllCheckbox($event);">
                                                </label>
                                            </th>
                                            <template x-for="heading in headings">
                                                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs" x-text="heading.value" :x-ref="heading.key" :class="{ [heading.key]: true }"></th>
                                            </template>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template x-for="user in users" :key="user.userId">
                                            <tr>
                                                <td class="border-dashed border-t border-gray-200 px-3">
                                                    <label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
                                                        <input type="checkbox" class="form-checkbox rowCheckbox focus:outline-none focus:shadow-outline" :name="user.userId" @click="getRowDetail($event, user.userId)">
                                                    </label>
                                                </td>
                                                <td class="border-dashed border-t border-gray-200 userId">
                                                    <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.userId"></span>
                                                </td>
                                                <td class="border-dashed border-t border-gray-200 firstName">
                                                    <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.firstName"></span>
                                                </td>
                                                <td class="border-dashed border-t border-gray-200 lastName">
                                                    <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.lastName"></span>
                                                </td>
                                                <td class="border-dashed border-t border-gray-200 emailAddress">
                                                    <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.emailAddress"></span>
                                                </td>
                                                <td class="border-dashed border-t border-gray-200 gender">
                                                    <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.gender"></span>
                                                </td>
                                                <td class="border-dashed border-t border-gray-200 phoneNumber">
                                                    <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.phoneNumber"></span>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer class="w-full py-3 bg-ijo mx-auto">
        <p class="text-white text-center font-roboto text-sm">© 2022 Copyright: BengkelAe</p>
    </footer>


    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

    <!-- library elemnt -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</body>

</html>