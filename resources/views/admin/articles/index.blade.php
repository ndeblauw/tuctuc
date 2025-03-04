<x-site-layout>


    <h2 class="font-bold text-4xl">ADMIN Articles</h2>

    <div class="text-right">
        <a href="{{route('admin.articles.create')}}">create article</a>
    </div>


    <div>
        {{$articles->links()}}
    </div>

    <ul class=" mt-12">
        @foreach($articles as $article)
            <li class="hover:bg-gray-100 p-2 flex justify-between">
                <a class="" href="{{route('admin.articles.show', $article)}}">
                    <h3 class="">{{$article->title}}</h3>
                </a>
                <div class="flex justify-center items-center gap-2">
                    <div>
                        <a class="bg-purple-100 text-purple-500 hover:bg-purple-200 p-2 rounded uppercase font-semibold" href="{{route('admin.articles.edit', $article)}}">edit</a>

                    </div>
                    <form action="{{route('admin.articles.destroy',$article)}}" method="post">@csrf @method('delete') <button class="bg-purple-100 text-purple-500 hover:bg-purple-200 p-2 rounded uppercase font-semibold" type="submit">delete</button></form>

                </div>
            </li>
        @endforeach
    </ul>

</x-site-layout>

