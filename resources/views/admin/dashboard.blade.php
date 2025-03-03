<x-site-layout>
    This is the admin dashboard

    Your name is {{auth()->user()->name}}

    <div>
        <h2>Your articles</h2>
        <ul class="list-disc pl-4">
            @foreach(auth()->user()->articles as $article)
                <li>{{$article->title}}</li>
            @endforeach

        </ul>
    </div>
</x-site-layout>
