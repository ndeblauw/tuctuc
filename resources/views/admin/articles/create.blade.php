<x-site-layout>

    <x-form
        action="/admin/articles"
        method="post"
        title="Create an article"
        :cancelurl="route('admin.articles.index')"
        submittext="Create article"
    >

        <input type="hidden" name="author_id" value="{{auth()->user()->id}}"/>

        <x-form-input name="title" label="Article title" placeholder="Your title comes here"/>
        <x-form-textarea name="content" label="Your article content" rows="7"/>

        @foreach( \App\Models\Keyword::orderBy('name')->get() as $keyword)
            <input type="checkbox" name="keywords[]" value="{{$keyword->id}}" @checked(old('keywords') && in_array($keyword->id, old('keywords')))>
            <label for="keywords[]">{{$keyword->title}}</label><br>
        @endforeach


    </x-form>

</x-site-layout>
