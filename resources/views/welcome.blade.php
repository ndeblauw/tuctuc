<x-site-layout>
    <div class="max-w-6xl mx-auto grid grid-cols-3 gap-x-12">

        <div class="col-span-2">
            <ul class="grid grid-cols-1 gap-12">
                @foreach($articles as $article)
                   <x-article-card :article="$article" />
                @endforeach
            </ul>

        </div>

        <div class="bg-purple-50 p-4">
            <h3 class="font-bold">Our top authors</h3>
            @foreach($authors as $author)
                {{$author->name}}<br/>
            @endforeach

            <h3 class="font-bold mt-12">Our top keywords</h3>
        </div>
    </div>
</x-site-layout>
