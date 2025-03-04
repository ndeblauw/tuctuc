<x-site-layout>

    <h2 class="font-bold text-4xl">Articles</h2>


    <div>
        {{$articles->links()}}
    </div>


    <ul class="grid grid-cols-3 gap-12 mt-12">
        @foreach($articles as $article)
            <x-article-card :article="$article" />
        @endforeach
    </ul>

</x-site-layout>

