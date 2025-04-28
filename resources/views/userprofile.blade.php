<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="size-lvh w-full flex  justify-center items-center bg-amber-50 ">
        @if(session('name'))
            <div>
                <div
                    class="border-1 p-2 rounded-2xl border-l-amber-300 border-t-blue-300 border-r-rose-300 border-b-green-300 bg-white shadow-lg">

                    Wlcome to your profile page! <span class="text-violet-600 ">{{ session('name') }}</span> <br>

                </div>
                <div class="mt-4 flex justify-center items-center">
                    <a href="logout"
                        class="border-1 pt-2 pb-2 rounded-2xl pr-8 pl-8 border-l-amber-300 border-t-blue-300 border-r-rose-300 border-b-green-300 bg-white shadow-lg hover:border-b-blue-300 hover:border-t-green-300 hover:border-l-rose-300 hover:border-r-amber-300 hover:shadow-2xs hover:text-gray-600    ">Logout</a>
                </div>
            </div>
        @else
            <div>
                <div
                    class="border-1 p-2 rounded-2xl border-l-amber-300 border-t-blue-300 border-r-rose-300 border-b-green-300 bg-white shadow-lg">
                    No user found <span class="text-violet-600 "></span> <br>
                </div>
                <div class="mt-4 flex justify-center items-center">
                    <a href="/form" class="border-1 pt-2 pb-2 rounded-2xl pr-8 pl-8 border-l-amber-300 border-t-blue-300
                                                                                    border-r-rose-300 border-b-green-300 bg-white shadow-lg hover:border-b-blue-300
                                                                                    hover:border-t-green-300 hover:border-l-rose-300 hover:border-r-amber-300 hover:shadow-2xs
                                                                                    hover:text-gray-600 ">Login</a>
                </div>
            </div>
        @endif
    </div>
</body>

</html>