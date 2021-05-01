<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Trader</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">

</head>

<body class="bg-gray-50">
    <nav class="p-4  flex justify-between" id="navbar">
        <h1 class="flex items-center text-white text-2xl font-bold">Game Trader</h1>
        {{-- <ul class="flex items-center text-white">
            <li>
                <a  class="p-3">Home</a>
            </li>

            <li>
                <a  class="p-3">Dashboard</a>
            </li>
            <li>
                <a  class="p-3">Post</a>
            </li>
        </ul> --}}

        <ul class="flex items-center text-white">
            <li class="mx-5">Home</li>
            <div class="flex items-center dropdown mr-3 ml-7">
                <span class="material-icons">
                    arrow_drop_down
                </span>
                <span class="material-icons md-48">
                    account_circle
                </span>
                <div class="dropdown-content mr-5">
                    <a href="">Log out</a>
                </div>
            </div>
            {{-- @auth
            <li>
                <a href="" class="p-3">Username</a>
            </li>
            <li>
                <form  method="POST" class="inline p-3">
                    @csrf
                    <button type="submit">Log out</button>
                </form>
            </li>
            @endauth

            @guest
            <li>
                <a  class="p-3">Login</a>
            </li>
            <li>
                <a  class="p-3">Register</a>
            </li>
            @endguest --}}
        </ul>

    </nav>
    @yield('content')
</body>

</html>
