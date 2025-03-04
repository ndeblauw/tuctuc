<x-site-layout>

    <div>
        This is the admin dashboard

        Your name is {{auth()->user()->name}}
    </div>

    <div>
        <div class="flex justify-between">
            <h2 class="font-bold text-2xl">Your articles</h2>

            <a href="{{route('admin.articles.create')}}" class="bg-purple-100 text-purple-500 hover:bg-purple-200 p-2 rounded uppercase font-semibold">Create article</a>
        </div>

        <ul class="list-disc pl-4">
            @foreach(auth()->user()->articles as $article)
                <li>{{$article->title}}</li>
            @endforeach

        </ul>
    </div>
</x-site-layout>
