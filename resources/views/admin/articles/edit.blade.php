<x-site-layout>

    <x-form
        :action="route('admin.articles.update',$article)"
        method="put"
        title="Update article"
        :cancelurl="route('admin.articles.show',$article)"
        submittext="Update article"
    >

        <x-form-input name="title" label="Article title" placeholder="Your title comes here" :value="$article->title"/>
        <x-form-textarea rte name="content" label="Your article content" rows="7" :value="$article->content"/>

        <div class="mb-8">
            <label for="photo" class="font-semibold">Upload article photo</label>
            <br/>
            <input name="photo" type="file">
            @error('photo')
            <div class="text-sm p-2 text-red-500">
                {{$message}}
            </div>
            @enderror
        </div>


        <x-form-checkboxes name="keywords" label="Keywords"
                           :options="\App\Models\Keyword::orderBy('title')->pluck('title', 'id')->toArray()"
                           :values="$article->keywords->pluck('id')->toArray()" />

    </x-form>






</x-site-layout>
