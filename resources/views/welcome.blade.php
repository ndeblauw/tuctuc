<x-site-layout>
    <div class="max-w-6xl mx-auto grid grid-cols-3">

        <div class="col-span-2">
            @foreach($articles as $article)
                <h2>{{$article->title}}</h2>

            @endforeach
        </div>

        <div class="bg-purple-50 p-4">
            <h3 class="font-bold">Our top authors</h3>
            @foreach($authors as $author)
                {{$author->name}}<br/>
            @endforeach
        </div>
    </div>
</x-site-layout>
