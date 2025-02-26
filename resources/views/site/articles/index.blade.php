<h2>Articles</h2>

<ul>
    @foreach($articles as $article)
        <li><a href="/articles/{{$article->id}}">{{$article->title}}</a></li>
    @endforeach
</ul>
