<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Modal</title>

    <style> body { font-family: sans-serif; } </style>
</head>

<body class="p-10">
    <div id="app" class="text-center">
        <h1 class="text-2xl font-bold mb-8">Modal</h1>

        <p>
            <a href="#cancel-modal" class="text-blue-500 underline">Open Modal</a>
        </p>

        <modal name="cancel-modal">
            <h1 class="font-bold text-xl mb-2">Leaving So Soon?</h1>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore.
            </p>

            <template v-slot:footer>
                <button
                    @click="$modal.hide('cancel-modal')"
                    class="bg-gray-500 py-2 px-4 rounded-lg text-white hover:bg-gray-600 mr-2"
                >Cancel</button>

                <a
                    href="#confirm-cancel-modal"
                    class="bg-blue-500 py-2 px-4 rounded-lg text-white hover:bg-blue-600"
                >Confirm Cancellation</a>
            </template>
        </modal>

        <modal name="confirm-cancel-modal">
            <h1 class="font-bold text-xl mb-2">You're 100% Sure?</h1>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore.
            </p>

            <template v-slot:footer>
                <a href="#" class="bg-gray-500 py-2 px-4 rounded-lg text-white hover:bg-gray-600 mr-2">Cancel</a>
                <a href="#" class="bg-blue-500 py-2 px-4 rounded-lg text-white hover:bg-blue-600">Yes</a>
            </template>
        </modal>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
