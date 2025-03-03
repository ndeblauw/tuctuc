<x-site-layout>

    <x-form
        :action="route('admin.keywords.store')"
        method="post"
        title="Create keyword"
        :cancelurl="route('admin.keywords.index')"
        submittext="Create keyword"
    >

        <x-form-input name="title" label="Keyword name" placeholder="put your keyword here"/>

    </x-form>

</x-site-layout>
