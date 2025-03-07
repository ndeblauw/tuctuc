<x-site-layout>

    <div>
        This is the admin dashboard

        Your name is {{auth()->user()->name}}
    </div>

    @if( auth()->user()->articles->isEmpty() )
        <div class="text-sm p-2 text-red-500 bg-red-100 rounded-xl my-12">
            You have no articles yet.
        </div>
    @endif

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

        @if( session()->has('success'))
            <div class="p-2 bg-green-200 w-full my-4">
                {{ session()->get('success') }}

            </div>
        @endif

        <ul class="list-disc pl-4">
            @foreach(auth()->user()->articles as $article)
                <li>
                    {{$article->title}}
                    @if($article->published_at)
                        <a href="{{route('admin.articles.unpublish', $article)}}" class="bg-red-100 text-red-500 hover:bg-red-200 p-0.5 text-xs rounded uppercase font-semibold">UNPUBLISH</a>
                    @else
                        <a href="{{route('admin.articles.publish', $article)}}" class="bg-green-100 text-green-500 hover:bg-green-200 p-0.5 text-xs rounded uppercase font-semibold">PUBLISH NOW</a>
                    @endif


                </li>
            @endforeach

        </ul>
    </div>
</x-site-layout>
