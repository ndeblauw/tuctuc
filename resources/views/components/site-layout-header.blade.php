<div class="bg-purple-700 text-purple-50">
    <div class="max-w-7xl m-auto flex justify-between items-center h-10">
        <div class="font-bold text-lg">TucTuc</div>
        <ul class="flex gap-x-4">
            @foreach($menu as $label => $url)
                <li><a class="hover:font-semibold hover:text-white" href="{{$url}}">{{$label}}</a></li>
            @endforeach
        </ul>
        <div>Login comes here</div>
    </div>
</div>
