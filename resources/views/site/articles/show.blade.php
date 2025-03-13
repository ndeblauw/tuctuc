<x-site-layout>

    @foreach($article->keywords as $keyword)
        <span class="bg-yellow-200 text-yellow-600 p-1">{{$keyword->title}}</span>
    @endforeach
    <h2 class="font-bold mb-4 text-4xl">{{$article->title}}</h2>



    <div class="mb-8">Article by <span class="font-semibold">{{$article->author->name}}</span></div>

        <div class="w-2/3">
            <img class="object-fit" src="{{ $article->getImageUrl() }}"/>
        </div>

        <div class="text-xl font-semibold mb-4 mb-12">
            {{ $article->getSummaryText() }}

        </div>

    <div>
        {!! $article->getContentText() !!}

        <div class="bg-purple-50 p-4 mt-8 mb-8">
            <h2 class="text-xl font-bold mb-4">Comments to this article</h2>

            <form action="{{route('comments.store')}}" method="post" class="bg-white border-2 border-purple-500 p-4">

                @csrf
                <h3 class="font-semibold text-purple-500">Add your comment</h3>

                <input type="hidden" name="article_id" value="{{$article->id}}"/>

                @auth
                    Your name is {{auth()->user()->name}}<br/>
                @else
                    <x-form-input name="name" label="Your name" />
                    <x-form-input name="email" label="Your email" />
                @endauth
                <x-form-textarea name="comment" label="Your comment" />

                <div class="flex justify-end">
                    <button class="bg-purple-500 text-white p-1 uppercase">submit</button>
                </div>

            </form>

            <div class="p-4">
                @foreach($article->comments as $comment)
                    <div class="border-b border-purple-800 mb-2 pb-2">
                        <span class="text-sm text-purple-500">{{$comment->author->name}}</span> |
                        <span class="text-sm text-purple-500">{{$comment->created_at}}</span>
                        <div class="text-sm">{{$comment->comment}}</div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

        <div class="my-12">
            <h2 class="font-bold">related articles</h2>
            @foreach($related_articles as $related_article)
                <a href="{{route('articles.show', $related_article)}}" class="underline">{{$related_article->title}}</a>
            @endforeach
        </div>

    <x-article-contact-author :author="$article->author"/>

</x-site-layout>
