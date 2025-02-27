<x-site-layout>

    <form action="/articles" method="post">

        @csrf

        <div>
            Title<br/>
            <input type="text" name="title" class="border border-purple-600" value="{{old('title')}}">
            @error('title')
            <div class="bg-red-50 p-2 text-red-500">
                {{$message}}
            </div>
            @enderror

        </div>

        <div>
            Content<br/>
            <textarea name="content" class="border border-purple-600">{{old('content')}}</textarea>
            @error('content')
            <div class="bg-red-50 p-2 text-red-500">
                {{$message}}
            </div>
            @enderror
        </div>



        <button type="submit">Create article</button>
    </form>


</x-site-layout>
