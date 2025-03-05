<div class="relative bg-purple-700 text-purple-50 border-t-6 border-purple-500">
    <div class="absolute inset-0 bg-[url('/img/gplay.png')] opacity-90 mix-blend-overlay z-0"></div>

    <div class="relative max-w-7xl m-auto flex justify-between items-center h-20 z-50">
        <div class="">
            <div class="flex justify-start items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
                <div class="flex flex-col">
                    <a href="{{route('home')}}" class="font-bold text-lg">TucTuc</a>
                    <span class="text-xs italic">Harbour.Space UTCC campus blog</span>
                </div>
            </div>


        </div>
        <ul class="flex gap-x-4">
            @foreach($menu as $label => $url)
                <li><a class="hover:font-semibold hover:text-white" href="{{$url}}">{{$label}}</a></li>
            @endforeach
        </ul>
        <div>
            @if(auth()->user()!== null )
                <a class="bg-purple-300 p-1 rounded text-purple-600" href="{{route('admin.dashboard')}}">{{ auth()->user()->name }}</a>
            @else
                <a href="{{route('login')}}">Log in</a>
            @endif
        </div>
    </div>
</div>
