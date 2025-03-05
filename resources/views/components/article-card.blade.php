<li class=" p-2 border-t-2 border-t-black hover:bg-purple-50">
    <a class="" href="{{route('articles.show', $article)}}">
        @foreach($article->keywords as $keyword)
            <span class="bg-yellow-200 text-yellow-600 p-1 text-xs">{{$keyword->title}}</span>
        @endforeach
        <h3 class="font-bold text-2xl">{{$article->title}}</h3>
        <span class="italic border-l-2 border-purple-500 pl-2">by {{$article->author->name}}</span>
        <p class="line-clamp-2"> {{$article->getSummaryText()}}</p>
    </a>
</li>
