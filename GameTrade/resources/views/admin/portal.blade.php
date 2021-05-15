@extends('layouts.index')
@section('content')
<div class="container-catalog-menu py-10">
    <h1 class="item-menu-1 text-2xl text-gray-600">Portal de Administracion</h1>

    <a class="rounded-full main-dark flex items-center justify-center round-btn-48 shadow-2xl item-menu-2"
        href="/admin-add">
        <span class="material-icons-outlined md-48">
            add
        </span>
    </a>
    <a class="rounded-full main-dark flex items-center justify-center round-btn-48 shadow-2xl item-menu-3"
        href="/admin-add">
        <span class="material-icons-outlined md-48">
        fact_check
        </span>
    </a>
    <div class="wrap item-menu-4">
    <form action="/buscar" method="get">
        <div class="search">
            <input class="searchTerm" placeholder="Search..." type="text" name="name" id="name" >
            <button type="submit" class="searchButton" name="search" id="search">
                <span class="material-icons-outlined md-40">
                    search
                </span>
            </button>
        </div>
        </form>
    </div>
</div>

{{-- 
Administrar Subida de titulos --}}
<div class="grid grid-cols1 justify-items-center overflow-x-auto">
    <div class="inline-block shadow rounded-lg overflow-hidden">


        <table class="table-auto">
            <thead class="main-dark w-full text-white">
                <th class=" px-10 py-5 text-left font-thin leading-10">Game Name</th>
                <th class=" px-10 py-5 text-left font-thin leading-10">User</th>
                <th class=" px-10 py-5 text-left font-thin leading-10">Version</th>
                <th class=" px-10 py-5 text-left font-thin leading-10">Edition</th>
                <th class=" px-10 py-5 text-left font-thin leading-10">Console</th>
                <th class=" px-10 py-5 text-left font-thin leading-10"></th>
                <th class=" px-10 py-5 text-left font-thin leading-10"></th>
            </thead>
            
            <tbody>
                <tr class="border-b border-gray-300">
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">gamename</td>
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">USERNAME</td>
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">version</td>
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">Edition</td>
                    <td class="px-10 py-5 text-left leading-10 font-normal whitespace-no-wrap">Console</td>
                    <td class="px-5 py-5 text-center leading-10 font-normal whitespace-no-wrap"><button
                            class="main-red text-white px-8 border rounded-full">Accept</button></td>
                    <td class="px-5 pr-10 py-5 text-center leading-10 font-normal whitespace-no-wrap"><button
                            class="text-main-red main-red-border px-8 border rounded-full">Deny</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container-catalog py-16">
    @foreach($titulos as $id => $title)
    <div class="catalog-card justify-items-center">
        <img src="{{$title['Link']}}" alt="{{asset('storage/img/dummy1.jpg')}}" srcset="">
        <div class="catalog-card-content">
            {{$title['Nombre']}}
        </div>
        <a href="/eliminar/{{$title['id']}}" class="main-red text-white px-8 py-2 border rounded-full text-center" style="width: 150px; height: 50px;">Delete</a>
    </div>
    
    @endforeach
</div>

@endsection
