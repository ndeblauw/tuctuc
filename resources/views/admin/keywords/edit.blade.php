<x-site-layout>

    <x-form
        :action="route('admin.keywords.update',$keyword)"
        method="put"
        title="Update keyword"
        :cancelurl="route('admin.keywords.index')"
        submittext="Update keyword"
    >

        <x-form-input name="title" label="Keyword name" placeholder="put your keyword here" :value="$keyword->title"/>

    </x-form>

</x-site-layout>
