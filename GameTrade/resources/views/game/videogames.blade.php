@extends('layouts.index')
@section('content')
<div class="grid grid-cols-1 justify-items-center py-4 h-full">
<div class="grid grid-cols1 justify-items-center overflow-x-auto">
    <div class="inline-block shadow rounded-lg overflow-hidden">
        <table class="table-auto">
            <thead class="main-dark w-full text-white">
                <th class=" px-10 py-5 text-left font-thin leading-10">Game Name</th>
                <th class=" px-10 py-5 text-left font-thin leading-10">User</th>
                <th class=" px-10 py-5 text-left font-thin leading-10">Estado</th>
                <th class=" px-10 py-5 text-left font-thin leading-10">Console</th>
                <th class=" px-10 py-5 text-left font-thin leading-10"></th>
                <th class=" px-10 py-5 text-left font-thin leading-10"></th>
            </thead>
            
            <tbody>
            @foreach($juegos as $id => $juego)
                <tr class="border-b border-gray-300">
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">{{$titulo}}</td>
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">{{$juego['Uname']}}</td>
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">{{$juego['Estado_Fisico']}}</td>
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">{{$juego['Consola']}}</td>
                    <td class="px-5 py-5 text-center leading-10 font-normal whitespace-no-wrap"><a href="http://127.0.0.1:8000/game-info/{{$juego['id']}}/{{$titulo}}"
                            class="main-red text-white px-8 py-2 border rounded-full">Check</a></td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection