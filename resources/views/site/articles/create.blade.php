<x-site-layout>

    <form action="/articles" method="post">

        @csrf


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

        <x-form-input name="title" label="Article title" placeholder="Your title comes here"/>

</x-site-layout>
