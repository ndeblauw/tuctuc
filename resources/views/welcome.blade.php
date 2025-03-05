<x-site-layout>
    <div class="max-w-6xl mx-auto grid grid-cols-3 gap-x-12">

        <div class="col-span-2">
            <ul class="grid grid-cols-1 gap-12">
                @foreach($articles as $article)
                   <x-article-card :article="$article" />
                @endforeach
            </ul>

        </div>

        <div>
            <div class="relative bg-slate-50 rounded-xl mb-8 p-4 overflow-hidden">
                <h2 class="font-bold text-slate-800 mb-4">Our top contributors</h2>
                <p class="text-black">
                    @foreach($authors as $author)
                        {{$author->name}}<br/>
                    @endforeach
                </p>
            </div>
            <div>
                <h3 class="font-bold mt-12">Our top keywords</h3>
            </div>

        </div>
    </div>
</x-site-layout>
