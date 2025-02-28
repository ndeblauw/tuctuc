<x-site-layout>

    <x-form
        action="/articles"
        method="post"
        title="Create an article"
        cancelurl="/articles"
        submittext="Create article"
    >

        <x-form-input name="title" label="Article title" placeholder="Your title comes here"/>
        <x-form-textarea name="content" label="Your article content" rows="7"/>

    </x-form>

</x-site-layout>
