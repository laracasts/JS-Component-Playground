<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Smooth Scrolling</title>
</head>
<body>
    <div id="app" class="p-8">
        <h1 class="text-2xl font-bold">Smooth Scroll</h1>

        <scroll-link href="#categories" class="text-blue-500">Go To Testimonials</scroll-link>

        <div style="height: 2000px"></div>

        <div id="categories">
            <h2 class="font-bold mb-6">Testimonials</h2>

            <div class="flex">
                <div class="w-1/3 h-48 bg-gray-200 p-4">
                    <scroll-link href="#app" class="text-blue-500">Go Back Up</scroll-link>
                </div>
                <div class="w-1/3 h-48 bg-gray-400 p-4">Item</div>
                <div class="w-1/3 h-48 bg-gray-200 p-4">Item</div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>