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
            <div class="relative bg-sky-50 rounded-xl mb-8 p-4 overflow-hidden min-h-32 border-2 border-sky-200">
                <div class="absolute inset-0 bg-[url('/img/gplay.png')] opacity-40 mix-blend-darken "></div>

                <svg class="absolute -bottom-2 -right-6 opacity-40  w-32 h-32 text-sky-200 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                </svg>


                <h2 class="font-bold text-sky-800 mb-4">Inspirational quote</h2>

                <p class="text-sky-950">
                    <div class="font-semibold">{{$quote->quote}}</div>
                    <div class="italic text-right">{{$quote->author}}</div>
                </p>
            </div>

            <div class="relative bg-purple-50 rounded-xl mb-8 p-4 overflow-hidden min-h-32 border-2 border-purple-200">
                <div class="absolute inset-0 bg-[url('/img/gplay.png')] opacity-40 mix-blend-darken "></div>

                <svg class="absolute -bottom-6 -right-6 opacity-40  w-32 h-32 text-purple-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>

                <h2 class="font-bold text-purple-800 mb-4">Harbour.Space @ UTCC</h2>

                <p class="text-purple-950">
                    Where innovation meets ambition, and student life is a journey of collaboration, creativity, and endless possibilities.
                </p>
            </div>

            <div class="relative bg-slate-50 rounded-xl mb-8 p-4 overflow-hidden min-h-32 border-2 border-slate-200">
                <div class="absolute inset-0 bg-[url('/img/gplay.png')] opacity-40 mix-blend-darken "></div>

                <svg class="absolute -bottom-2 -right-6 opacity-40  w-32 h-32 text-slate-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-pen"><path d="M11.5 15H7a4 4 0 0 0-4 4v2"/><path d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/><circle cx="10" cy="7" r="4"/></svg>

                <h2 class="font-bold text-slate-800 mb-4">Our top contributors</h2>

                <p class="text-black">
                    @foreach($authors as $author)
                        {{$author->name}}<br/>
                    @endforeach
                </p>
            </div>
            <div class="relative bg-yellow-50 rounded-xl mb-8 p-4 overflow-hidden min-h-32 border-2 border-yellow-200">
                <div class="absolute inset-0 bg-[url('/img/gplay.png')] opacity-40 mix-blend-darken "></div>

                <svg class="absolute -bottom-6 -right-6 opacity-40  w-32 h-32 text-yellow-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tags"><path d="m15 5 6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"/><path d="M9.586 5.586A2 2 0 0 0 8.172 5H3a1 1 0 0 0-1 1v5.172a2 2 0 0 0 .586 1.414L8.29 18.29a2.426 2.426 0 0 0 3.42 0l3.58-3.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="6.5" cy="9.5" r=".5" fill="currentColor"/></svg>

                <h2 class="font-bold text-yellow-800 mb-4">Our top keywords</h2>

                <p class="text-black">

                </p>
            </div>

        </div>
    </div>
</x-site-layout>
