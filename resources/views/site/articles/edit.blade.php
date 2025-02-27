<x-site-layout>



    <form action="/articles/{{$article->id}}" method="post">
        @csrf
        @method('put')

        <div>
            Title<br/>
            <input type="text" name="title" class="border border-purple-600" value="{{old('title',$article->title)}}">
            @error('title')
            <div class="bg-red-50 p-2 text-red-500">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            Content<br/>
            <textarea name="content" class="border border-purple-600">{{old('content',$article->content)}}</textarea>
            @error('content')
            <div class="bg-red-50 p-2 text-red-500">
                {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit">Update article</button>
    </form>


</x-site-layout>
