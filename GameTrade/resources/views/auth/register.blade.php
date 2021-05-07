@extends('layouts.index')
@section('content')
{{-- justify-items-center: center on x 
    items-center center on y --}}
<div class="grid grid-cols-1 justify-items-center items center py-10  w-full">
    <div class="shadow-2xl container-sigup mx-3">
        <div class="main-dark lg:rounded-l-xl item-A-register">
            <h1 class="text-white font-bold item-A-register-title">Game Trader</h1>
            <div class="flex flex-row item-A-register-links">
                <a class="no-underline text-main-red mr-2" href="">About</a>
                <a class="no-underline text-main-red mx-2" href="">Contact</a>
            </div>
        </div>
        <div class="bg-white lg:rounded-r-xl rounded-b-xl flex flex-col px-10 item-B-register">
            <form action="" method="POST">
                    @csrf
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="username">Username</label>
                        <input class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none" type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="mail">Email</label>
                        <input class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none"  type="email" name="email" id="email" placeholder="mail">
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="password">Password</label>
                        <input class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none" type="password" name="password" id="password" placeholder="password">
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="password_confirmation">Repeat the password</label>
                        <input class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none" type="password_confirmation" name="password_confirmation" id="password_confirmation" placeholder="Repeat password">
                    </div>
                    <div class="flex flex-row my-10">
                        <input class="main-red rounded-full p-3 text-white w-2/5 text-lg" type="submit" value="Sign up">
                        <a class="underline text-gray-400 p-3 ml-5" href="/login">Sign in</a>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
