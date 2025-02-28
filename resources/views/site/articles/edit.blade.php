<x-site-layout>

        <x-form-input name="title" label="Article title" placeholder="Your title comes here" :value="$article->title"/>


    <form action="/articles/{{$article->id}}" method="post">
        @csrf
        @method('put')


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
