<x-site-layout>
    <h2 class="font-bold mb-4 text-4xl">{{$article->title}}</h2>

    <p>
        {{$article->content}}
    </p>

    <x-article-contact-author :author="$article->author"/>

</x-site-layout>
