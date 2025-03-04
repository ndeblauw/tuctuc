<div class="bg-purple-700 text-purple-50">
    <div class="max-w-7xl m-auto flex justify-between items-center h-10">
        <a href="{{route('home')}}" class="font-bold text-lg">TucTuc</a>
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
