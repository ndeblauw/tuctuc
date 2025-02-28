<x-site-layout>

        <x-form-input name="title" label="Article title" placeholder="Your title comes here" :value="$article->title"/>
        <x-form-textarea name="content" label="Your article content" rows="7" :value="$article->title"/>


    <form action="/articles/{{$article->id}}" method="post">
        @csrf
        @method('put')



        <button type="submit">Update article</button>
    </form>


</x-site-layout>
