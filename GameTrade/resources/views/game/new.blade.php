@extends('layouts.index')
@section('content')
{{-- justify-items-center: center on x 
    items-center center on y --}}
<div class="grid grid-cols-1 justify-items-center items center py-10  w-full">
    <div class="shadow-2xl container-sigup mx-3">
        <div class="main-dark lg:rounded-l-xl item-A-register">
            <h1 class="text-white font-bold item-A-register-title">New Game</h1>
            <div class="flex flex-row item-A-register-links">
                <a class="no-underline text-main-red mr-2" href="">About</a>
                <a class="no-underline text-main-red mx-2" href="">Contact</a>
            </div>
        </div>
        <div class="bg-white lg:rounded-r-xl rounded-b-xl flex flex-col px-10 item-B-register">
            <form action="game-add" method="POST">
                    @csrf
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="title">Titulo</label>
                        <select name="title" id="title" class="w-full py-2.5 px-3 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none">
                        @foreach($titulos as $id => $title)
                        <option value="{{$title['id']}}">{{$title['Nombre']}}</option>
                        @endforeach
                        </select>
                   </div>
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="username">Consola</label>
                        <input class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none" type="text" name="consola" id="consola" placeholder="consola">
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="mail">Estado</label>
                        <select name="estado" id="estado" class="w-full py-2.5 px-3 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none">
                        <option value="Excelente">Excelente</option>
                        <option value="Bueno">Bueno</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Malo">Malo</option>
                        </select>
                   </div>
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="password">Descripcion</label>
                        <input class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none" type="text" name="desc" id="desc" placeholder="desc">
                    </div>
                     @if (session('error'))
                    <p>{{session('error')}}</p>
                    @endif
                    <div class="flex flex-row my-10">
                        <input class="main-red rounded-full p-3 text-white w-2/5 text-lg" type="submit" value="ADD">
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
