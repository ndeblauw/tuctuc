<x-site-layout>

    <form action="/articles" method="post">

        @csrf

        <div>
            Title<br/>
            <input type="text" name="title" class="border border-purple-600">

        </div>

        <div>
            Content<br/>
            <textarea name="content" class="border border-purple-600"></textarea>
        </div>



        <button type="submit">Create article</button>
    </form>


</x-site-layout>
