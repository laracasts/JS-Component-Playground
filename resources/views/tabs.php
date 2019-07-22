<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Tabs</title>
</head>
<body>
    <div id="app" class="p-8">
        <h1 class="text-2xl font-bold mb-6">Tabs</h1>

        <tabs>
            <tab title="First">
                <p>Hello world.</p>
            </tab>

            <tab title="Second">
                <p>Hello world again.</p>
            </tab>

            <tab title="Third">
                <p>Hello world and out.</p>
            </tab>

            <tab title="Wew" active>
                <p>It works!</p>
            </tab>
        </tabs>
    </div>


    <script src="/js/app.js"></script>
</body>
</html>
