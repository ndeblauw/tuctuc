<x-site-layout>

    <div>
        This is the admin dashboard

        Your name is {{auth()->user()->name}}
    </div>

    @if(auth()->user()->is_admin)
        <div class="bg-gray-100 rounded-xl p-4 my-12">
            You are an admin,
            you have access to the <a href="{{route('admin.keywords.index')}}" class="bg-purple-100 text-purple-500 hover:bg-purple-200 p-2 rounded uppercase font-semibold">keyword management</a>.
            you have access to the <a href="{{route('admin.articles.index')}}" class="bg-purple-100 text-purple-500 hover:bg-purple-200 p-2 rounded uppercase font-semibold">full article management</a>.

        </div>
    @endif

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
