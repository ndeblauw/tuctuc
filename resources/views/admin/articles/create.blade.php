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
        <x-form-textarea rte name="content" label="Your article content" rows="7"/>


        <x-form-checkboxes name="keywords" label="Keywords" :options="\App\Models\Keyword::orderBy('title')->pluck('title', 'id')->toArray()" />



    </x-form>

</x-site-layout>
