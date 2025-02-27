<x-site-layout>



    <form action="/articles/{{$article->id}}" method="post">
        @csrf
        @method('put')

        <div>
            Title<br/>
            <input type="text" name="title" class="border border-purple-600" value="{{$article->title}}">
        </div>

        <div>
            Content<br/>
            <textarea name="content" class="border border-purple-600">{{$article->content}}</textarea>
        </div>

        <button type="submit">Update article</button>
    </form>


</x-site-layout>
