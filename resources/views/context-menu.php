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
    <div id="app" class="flex flex-col items-center p-8">
        <h1 class="text-2xl font-bold mb-8">Context Menu</h1>

        <div>
            <div class="bg-gray-400 w-64 h-64 flex items-center justify-center">
                <!-- Example 1 -->
                <dropdown>
                    <template v-slot:trigger>
                        <button class="hover:text-blue-500">...</button>
                    </template>

                    <li><a href="#" class="pl-2 pr-8 leading-loose text-xs block hover:bg-gray-900">Edit</a></li>
                    <li><a href="#" class="pl-2 pr-8 leading-loose text-xs block hover:bg-gray-900">Delete</a></li>
                    <li><a href="#" class="pl-2 pr-8 leading-loose text-xs block hover:bg-gray-900">Report</a></li>
                </dropdown>
            </div>
        </div>

        <hr>

        <!-- Example 2 -->
        <dropdown classes="w-full">
            <template v-slot:trigger>
                <button class="text-blue-500">Example With Full Width Menu<button>
            </template>

            <li><a href="#" class="pl-2 pr-8 leading-loose text-xs block hover:bg-gray-900">Edit</a></li>
            <li><a href="#" class="pl-2 pr-8 leading-loose text-xs block hover:bg-gray-900">Delete</a></li>
            <li><a href="#" class="pl-2 pr-8 leading-loose text-xs block hover:bg-gray-900">Report</a></li>
        </dropdown>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
