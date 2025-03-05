<x-site-layout>

    @foreach($article->keywords as $keyword)
        <span class="bg-yellow-200 text-yellow-600 p-1">{{$keyword->title}}</span>
    @endforeach
    <h2 class="font-bold mb-4 text-4xl">{{$article->title}}</h2>



    <div class="mb-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

        <div class="text-xl font-semibold mb-4 mb-12">
            {{ $article->getSummaryText() }}

        </div>

    <div>
        {!! $article->getContentText() !!}
    </div>

        <div class="my-12">
            <h2 class="font-bold">related articles</h2>
            @foreach($related_articles as $related_article)
                <a href="{{route('articles.show', $related_article)}}" class="underline">{{$related_article->title}}</a>
            @endforeach
        </div>

    <x-article-contact-author :author="$article->author"/>

</x-site-layout>
