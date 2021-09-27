<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page_title")</title>
</head>

<body>
    <div class="container w-screen h-screen flex">

        <div class=" bg-white p-4 h-full w-2/12 relative">
            <h1 class="text-3xl font-extrabold text-center text-blue-600 mb-6">Admin</h1>
            <ul>
                <li class="py-2 px-2 bg-blue-600 text-white cursor-pointer">Students</li>
                <a href="{{ route('course.index') }}">
                    <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Courses
                    </li>
                </a>
                <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Course Type
                </li>
                <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Course
                    Selection</li>
                <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3 hover:text-white cursor-pointer">
                    <form action="{{ route('Logout') }}" method="post">
                        @csrf
                        <button
                            class="p-2 bg-red-500 px-4 text-white rounded hover:bg-red-400 duration-300">Logout</button>

                    </form>
                </li>
                <a href="/">
                    <li
                        class="py-2 px-2 w-4/5 hover:bg-blue-600 duration-300 mt-3 hover:text-white cursor-pointer bottom-0 absolute">
                        Home
                    </li>
                </a>
            </ul>
        </div>
        <div class=" w-10/12 h-full flex justify-center items-center bg-gray-300">

            <div class="h-full w-full">
                @yield("content")
            </div>

        </div>

    </div>



</body>

</html>
