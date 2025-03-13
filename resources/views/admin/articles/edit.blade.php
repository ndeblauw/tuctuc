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
            <label for="photo" class="font-semibold block mb-2">Upload article photo</label>

            <!-- Image Preview -->
            <div id="image-preview" class="mb-3">
                <img id="preview-img" src="{{$article->getImageUrl()}}" alt="Uploaded Image" class="w-48 h-48 object-cover rounded-lg border">
                <p class="text-sm text-gray-500 mt-2">Uploading a new image will replace the existing one.</p>
            </div>

            <!-- File Input -->
            <input id="photo" name="photo" type="file" accept="image/*"
                   class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring focus:ring-purple-300 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-600 hover:file:bg-purple-100">

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
