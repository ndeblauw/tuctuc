<x-site-layout>

    <div class="text-right">
        @if($article->published_at)
            <a href="{{route('admin.articles.unpublish', $article)}}" class="bg-red-100 text-red-500 hover:bg-red-200 p-0.5 text-xs rounded uppercase font-semibold">UNPUBLISH</a>
        @else
            <a href="{{route('admin.articles.publish', $article)}}" class="bg-green-100 text-green-500 hover:bg-green-200 p-0.5 text-xs rounded uppercase font-semibold">PUBLISH NOW</a>
        @endif

        <a href="{{route('admin.articles.edit',$article)}}">edit article</a>
        |
        <form action="{{route('admin.articles.destroy', $article)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit">delete article</button>
        </form>
    </div>


    @foreach($article->keywords as $keyword)
        <span class="bg-yellow-200 text-yellow-600 p-1">{{$keyword->title}}</span>
    @endforeach
    <h2 class="font-bold mb-4 text-4xl">ADMIN {{$article->title}}</h2>

    <div class="w-2/3">
        <img class="object-fit" src="{{$article->getImageUrl()}}">
    </div>

    <div class="mb-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

    <div>
        {!! $article->getContentText() !!}
    </div>

    <x-article-contact-author :author="$article->author"/>

</x-site-layout>
