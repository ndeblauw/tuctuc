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
            <div class="relative bg-purple-50 rounded-xl mb-8 p-4 overflow-hidden min-h-32">
                <h2 class="font-bold text-purple-800 mb-4">Harbour.Space @ UTCC</h2>

                <p class="text-purple-950">
                    Where innovation meets ambition, and student life is a journey of collaboration, creativity, and endless possibilities.
                </p>
            </div>

            <div class="relative bg-slate-50 rounded-xl mb-8 p-4 overflow-hidden min-h-32">
                <h2 class="font-bold text-slate-800 mb-4">Our top contributors</h2>

                <p class="text-black">
                    @foreach($authors as $author)
                        {{$author->name}}<br/>
                    @endforeach
                </p>
            </div>
            <div class="relative bg-yellow-50 rounded-xl mb-8 p-4 overflow-hidden min-h-32">
                <h2 class="font-bold text-yellow-800 mb-4">Our top keywords</h2>

                <p class="text-black">

                </p>
            </div>

        </div>
    </div>
</x-site-layout>
