<x-site-layout>

    @foreach($article->keywords as $keyword)
        <span class="bg-yellow-200 text-yellow-600 p-1">{{$keyword->title}}</span>
    @endforeach
    <h2 class="font-bold mb-4 text-4xl">{{$article->title}}</h2>



    <div class="mb-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

    <p>
        {{$article->content}}
    </p>

    <x-article-contact-author :author="$article->author"/>

</x-site-layout>
