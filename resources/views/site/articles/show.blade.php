<x-site-layout>

    <div class="text-right">
        <a href="/articles/{{$article->id}}/edit">edit article</a>
        |
        <form action="/articles/{{$article->id}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit">delete article</button>
        </form>
    </div>

    <h2 class="font-bold mb-4 text-4xl">{{$article->title}}</h2>



    <div class="mb-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

    <p>
        {{$article->content}}
    </p>

    <x-article-contact-author :author="$article->author"/>

</x-site-layout>
