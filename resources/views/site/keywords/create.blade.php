<x-site-layout>

    <x-form
        :action="route('keywords.store')"
        method="post"
        title="Create keyword"
        :cancelurl="route('keywords.index')"
        submittext="Create keyword"
    >

        <x-form-input name="title" label="Keyword name" placeholder="put your keyword here"/>

    </x-form>

</x-site-layout>
