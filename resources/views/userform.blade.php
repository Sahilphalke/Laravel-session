<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full size-lvh border-2 flex justify-center items-center">
        <div
            class="p-5 border-2 rounded-2xl border-l-amber-300 border-t-blue-300 border-r-rose-300 border-b-green-300 bg-white shadow-lg">
            <form action="login" method="post" class="w-full">
                @csrf
                <!-- <input type="hidden" name="_method" value="DELETE"> -->
                <div class="mb-4">
                    <label for="name">Name:</label><br>
                    <input class="border-1 rounded-md p-1 mt-2" type="text" id="name" name="name" required>
                </div>
                <div class="mb-4">
                    <label for="email">Email:</label><br>
                    <input class="border-1 rounded-md p-1 mt-2" type="email" id="email" name="email" required>
                </div class="mb-4">
                <div class="mb-4">
                    <label for="message">Password</label><br>
                    <input class="border-1 rounded-md p-1 mt-2" type="password" id="password" name="password" required>
                </div>
                <div class="text-center">
                    <button
                        class="w-full rounded-md p-2 bg-linear-to-t from-sky-500 to-indigo-500 hover:bg-gradient-to-br hover:text-white"
                        type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>