@extends('layouts.index')
@section('content')
<div class="container-catalog-menu py-10">
    <h1 class="item-menu-1 text-2xl text-gray-600">Games catalog</h1>

    <button class="rounded-full main-dark flex items-center justify-center round-btn-48 shadow-2xl item-menu-2">
        <span class="material-icons-outlined md-48">
            add
        </span>
    </button>
    <button class="rounded-full main-dark flex items-center justify-center round-btn-48 shadow-2xl item-menu-3">
        <span class="material-icons-outlined md-48">
            upload
        </span>
    </button>
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
<div class="container-catalog py-16">
@foreach($titulos as $id => $title)
    <a class="catalog-card" href="/videogames/{{$title['id']}}/{{$title['Nombre']}}">
        <img src="{{$title['Link']}}" alt="{{asset('storage/img/dummy1.jpg')}}" srcset="">
        <div class="catalog-card-content">
            {{$title['Nombre']}}
        </div>
    </a>
@endforeach
</div>
@endsection
