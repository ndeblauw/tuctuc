<x-site-layout>

    <h2 class="font-bold text-2xl">Articles</h2>

    <ul class="list-disc pl-4">
        @foreach($articles as $article)
            <li><a class="underline" href="/articles/{{$article->id}}">{{$article->title}}</a></li>
        @endforeach
    </ul>

</x-site-layout>

