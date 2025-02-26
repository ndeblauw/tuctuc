<h2>Articles</h2>
<x-site-layout>
</x-site-layout>

<ul>
    @foreach($articles as $article)
        <li><a href="/articles/{{$article->id}}">{{$article->title}}</a></li>
    @endforeach
</ul>
