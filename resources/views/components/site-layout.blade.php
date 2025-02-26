<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="bg-purple-700 text-purple-50">
        <div class="max-w-7xl m-auto flex justify-between items-center h-10">
            <div class="font-bold text-lg">TucTuc</div>
            <ul class="flex gap-x-4">
                <li><a href="/articles">Articles</a></li>
                <li>Authors</li>
                <li>Keywords</li>
                <li>Contact us</li>
            </ul>
            <div>Login comes here</div>
        </div>
    </div>

    <div class="max-w-7xl m-auto mt-8 mb-16">
        {{$slot}}
    </div>

    <div class="bg-purple-700 text-purple-50">
        <div class="max-w-7xl m-auto">
            <div>Our great footer</div>
        </div>
    </div>


</body>
</html>
