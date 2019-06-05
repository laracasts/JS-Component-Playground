<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Confirmation Dialogs</title>
</head>

<body class="font-sans p-10">
    <div id="app" class="text-center">
        <h1 class="text-2xl font-bold mb-8">Confirmation Dialogs</h1>

        <div class="mb-6">
            <form method="POST">
                <confirm-button
                    message="Are you sure you want to cancel your account?"
                    class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg"
                >
                    Option 1
                </confirm-button>
            </form>
        </div>

        <div class="mb-6">
            <form method="POST">
                <confirm-button
                    message="Are you sure you want to cancel your account?"
                    cancel-button="Go Back"
                    confirm-button="Continue On"
                    class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg"
                >
                    Option 2
                </confirm-button>
            </form>
        </div>

        <div class="mb-6">
            <form method="POST" @submit.prevent="confirm('Are you really sure about this?')">
                <button class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg">
                    Option 3
                </button>
            </form>
        </div>

        <confirm-dialog></confirm-dialog>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
