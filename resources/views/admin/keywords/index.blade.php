<x-site-layout>

    <h2 class="font-bold text-4xl">Keywords</h2>

    <div class="text-right">
        <a href="{{route('admin.keywords.create')}}">create keyword</a>
    </div>


    <ul class="list-disc pl-4">
        @foreach($keywords as $keyword)
            <li class="flex justify-start gap-4">
                {{$keyword->title}}
                <a class="ml-2" href="{{route('admin.keywords.edit', $keyword)}}">edit</a>
                <form action="{{route('admin.keywords.destroy',$keyword)}}" method="post">@csrf @method('delete') <button type="submit">delete</button></form>
            </li>
        @endforeach
    </ul>

</x-site-layout>

