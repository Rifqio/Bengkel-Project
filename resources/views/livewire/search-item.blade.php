<div class="px-36 py-4">
    <div class="flex border-2 shadow-sm rounded-lg bg-slate-100">
        <div class="content-center py-3 rounded-l-lg px-2 "><svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="10" cy="10" r="7"></circle>
                <line x1="21" y1="21" x2="15" y2="15"></line>
            </svg></div>
        <div class="rounded-lg w-full ">
            <form method="get">
                <input wire:model='term' type="text" placeholder="Search for a part..."
                    class="py-3 border-none rounded-r-lg w-full bg-slate-100  focus:ring-green-500 ">
                <div wire:loading>Searching items...</div>
                <div wire:loading.remove>
                    @if ($term == '')

                    @else
                        @if ($item->isEmpty())
                            <div class="text-gray-500 text-sm">
                                No matching result was found.
                            </div>
                        @else
                            @foreach ($item as $i)
                                <div>
                                    <img src="{{ $i->image }}" alt="">
                                    <a href="/sparepart/{{ $i->slug }}/{{ $i->id }}" class="text-lg text-gray-900 text-bold">{{ $i->name }}</a>
                                </div>
                            @endforeach
                        @endif
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
