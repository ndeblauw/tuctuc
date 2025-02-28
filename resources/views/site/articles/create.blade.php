<x-site-layout>

    <form action="/articles" method="post">

        @csrf





        <button type="submit">Create article</button>
    </form>

        <x-form-input name="title" label="Article title" placeholder="Your title comes here"/>
        <x-form-textarea name="content" label="Your article content" rows="7"/>

</x-site-layout>
