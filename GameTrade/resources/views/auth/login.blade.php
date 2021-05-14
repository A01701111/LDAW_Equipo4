@extends('layouts.index')
@section('content')
<div class="grid grid-cols-1 justify-items-center py-4 h-full">
    <div class="bg-white rounded-lg shadow-lg flex flex-wrap md:w-auto w-4/5 p-0"> {{-- Container login --}}
        <div class="w-full h-16 main-dark rounded-t-lg border-b-8 main-red-border"></div>
        <div class="grid grid-cols-1 justify-items-center self-center w-full mx-4 md:mx-14">
            <form action="iniciar" method="post">
                @csrf
                <h1 class="text-2xl font-bold text-center my-14">Login</h1>
                <div class="flex flex-col my-2">
                    <label class="my-2 font-bold" for="mail">Email</label>
                    <input required class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none @error('email') border-red-500 @enderror" type="email" name="email" id="email" placeholder="mail" value="{{@old('email')}} ">
                    @error('email') 
                    {{$message}}
                    @enderror
                </div>
                <div class="flex flex-col my-2">
                    <label class="my-2 font-bold" for="password">Password</label>
                    <input required class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none" type="password" name="password" id="password" placeholder="password">
                    @if (session('error'))
                    <p>{{session('error')}}</p>
                    @endif
                </div>
                <div class="flex flex-col my-10 mb-20">
                    <input class="main-red rounded-full py-1 text-white w-full text-lg" type="submit" value="Login" name="action">
                    <a class="underline text-gray-400 p-3 ml-10 w-full" href="/sign-up">Sign Up</a>
                </div>

            </form>

        </div>
    
    </div>
</div>
@endsection