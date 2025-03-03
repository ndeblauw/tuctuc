<x-site-layout>

    <x-form
        :action="route('admin.articles.update',$article)"
        method="put"
        title="Update article"
        :cancelurl="route('admin.articles.show',$article)"
        submittext="Update article"
    >

        <x-form-input name="title" label="Article title" placeholder="Your title comes here" :value="$article->title"/>
        <x-form-textarea name="content" label="Your article content" rows="7" :value="$article->content"/>

        @foreach( \App\Models\Keyword::orderBy('name')->get() as $keyword)
            <input type="checkbox" name="keywords[]" value="{{$keyword->id}}" @checked($article->keywords->contains($keyword))>
            <label for="keywords[]">{{$keyword->title}}</label><br>
        @endforeach

    </x-form>






</x-site-layout>
