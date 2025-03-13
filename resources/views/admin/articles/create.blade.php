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


        <div class="mb-8">
            <label for="photo" class="font-semibold block mb-2">Upload article photo</label>

            <!-- File Input -->
            <input id="photo" name="photo" type="file" accept="image/*"
                   class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring focus:ring-purple-300 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-600 hover:file:bg-purple-100">

            @error('photo')
            <div class="text-sm p-2 text-red-500">
                {{$message}}
            </div>
            @enderror
        </div>

        <x-form-checkboxes name="keywords" label="Keywords" :options="\App\Models\Keyword::orderBy('title')->pluck('title', 'id')->toArray()" />



    </x-form>

</x-site-layout>
