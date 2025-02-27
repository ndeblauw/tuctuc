<x-site-layout>

    <h2 class="font-bold text-4xl">Authors</h2>

    <ul class="grid grid-cols-3 gap-12 mt-12">
        @foreach($authors as $author)

                <li class=" p-2 border-t-2 border-t-black hover:bg-purple-50">
                    <a class="" href="/authors/{{$author->id}}">
                        <h3 class="font-bold text-2xl">{{$author->name}}</h3>
                        <ul class="list-disc pl-4">
                            @foreach($author->articles as $article)
                                <li>{{$article->title}}</li>
                            @endforeach
                        </ul>
                    </a>
                </li>

        @endforeach
    </ul>

</x-site-layout>

