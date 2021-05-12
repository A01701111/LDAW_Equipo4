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

<body class="bg-gray-100">
    <!-- navbar goes here  max-w-6xl-->
    <nav class="" id="navbar">
        <div class="max-w-6xl mx-auto px-4 sticky">
            <div class="flex justify-between">

                <div class="flex space-x-4">
                    <!-- Page name -->
                    <div>
                        <a href="/" class="flex items-center py-5 text-white hover:text-gray-300">

                            <span class="font-bold text-2xl">Game Trader</span>
                        </a>
                    </div>
                </div>

                <!-- menu nav to the right -->
                <div class="hidden md:flex items-center space-x-1">
                    @if (!(session('token')))
                    <a href="{{route('register')}}" class="h-full py-5 align-middle px-3 text-white hover:text-grey-300">Sign Up</a>
                    <a href="{{url('/login')}}" class="h-full py-5 align-middle px-3 text-white hover:text-grey-300">Login</a>
                    @endif
                    @if (session('token'))
                    <a href="" class="h-full py-5 align-middle px-3 mx-5 text-white hover:text-grey-300 border-b-8 main-red-border">Home</a>
                    <div class="flex items-center dropdown mr-3 ml-7">
                        <span class="material-icons text-white">
                            arrow_drop_down
                        </span>
                        <span class="material-icons md-48">
                            account_circle
                        </span>
                        <div class="dropdown-content mr-5">
                            <a href="cerrar">Log out</a>
                        </div>
                    </div>
                    @endif

                </div>

                <!-- mobile button goes here -->
                <div class="md:hidden flex items-center outline-none mr-3">
                    <button class="mobile-menu-button">
                        <svg class="w-6 h-6 outline-none text-white focus:outline-none" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="flex mx-6 justify-between mb-2 border-b-2 border-gray-500">
                <a href="/dashboard" class="mr-3 text-white hover:text-gray-300 self-center">Home</a>
                <span class="material-icons text-white self-center">
                    home
                </span>
            </div>
            
            <div class="flex mx-6 justify-between my-2 border-b-2 border-gray-500">
                <a href="/" class="mr-3 text-white hover:text-gray-300 self-center">Search</a>
                <span class="material-icons text-white self-center">
                    search
                </span>
            </div>
            @if (session('token'))
            <div class="flex mx-6 justify-between my-2 border-b-2 border-gray-500">
                <a href="#" class="mr-3 text-white hover:text-gray-300 self-center">Register a physical copy</a>
                <span class="material-icons text-white self-center">
                    add
                </span>
            </div>

            <div class="flex mx-6 justify-between my-2 border-b-2 border-gray-500">
                <a href="cerrar" class="mr-3 text-white hover:text-gray-300 self-center">Log out</a>
                <span class="material-icons text-white self-center">
                    logout
                </span>
            </div>
            @endif
            @if (!(session('token')))
            <div class="flex mx-6 justify-between my-2 border-b-2 border-gray-500">
                <a href="/login" class="mr-3 text-white hover:text-gray-300 self-center">Log in</a>
                <span class="material-icons text-white self-center">
                    login
                </span>
            </div>
            @endif
        </div>
    </nav>
    
        @yield('content')
    
    <footer class="grid-container-footer">
        <div class="flex flex-col footer-info text-white">
            <p class="subpixel-antialiased font-bold mb-5 text-xl">Sitio creado por:</p>
            <p class="subpixel-antialiased leading-normal text-lg">Emilio Rivas</p>
            <p class="subpixel-antialiased leading-normal text-lg">Sebastian Resendiz</p>
            <p class="subpixel-antialiased leading-normal text-lg">Miguel Angel Marines</p>
        </div>
        <div class="copyright-footer text-white">
            <p><span>&#169;</span> 2021 Game Trader</p>
        </div>
        <div class="about-footer text-white flex flex-col font-bold text-lg">
            <a class="my-2 underline hover:text-gray-300" href="" >About this site</a>
            <a class="my-2 underline hover:text-gray-300" href="{{url('/team')}}">About us</a>
        </div>
    </footer>
    {{-- <nav class="p-4  flex justify-between" id="navbar">
        <h1 class="flex items-center text-white text-2xl font-bold">Game Trader</h1>

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
            
        </ul>

    </nav> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    @stack('scripts')
</body>

</html>
