@extends('items.layout.layout')
@section('content')
@foreach ($items as $item)
<div class="w-[240px] h-[240px] p-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 mb-28 px-5">
    <div
        class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105">
        <div class="flex justify-center">
            <img src="img/product/G1.png" alt="Gambar-product" width="80%">
        </div>
        <div class="text-center ">
            <h1 class="p-3 text-2xl font-bold group-hover:text-white">{{ $item->name }}</h1>
            <h4 class="group-hover:text-slate-100">{{ $item->price }}</h4>
        </div>
        <div
            class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
            <a href="/sparepart/{{ $item->slug }}/{{ $item->id }}">
                <h3 class="uppercase font-bold">show details</h3>
            </a>
        </div>
    </div>
</div>
@endforeach
@endsection
