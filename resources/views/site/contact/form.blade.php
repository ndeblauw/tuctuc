<x-site-layout title="contact me">


    <x-form
        method="POST"
        action="{{ route('contact.store') }}"
        title="contact us"
        cancelurl="{{ route('home') }}"
        submittext="send message"
    >

        <x-form-input name="email" label="your email"/>
        <x-form-textarea name="message" label="what you want to say"/>

    </x-form>
</x-site-layout>
