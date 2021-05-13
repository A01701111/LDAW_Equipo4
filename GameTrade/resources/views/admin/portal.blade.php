@extends('layouts.index')
@section('content')
<div class="container-catalog-menu py-10">
    <h1 class="item-menu-1 text-2xl text-gray-600">Portal de Administracion</h1>

    <a class="rounded-full main-dark flex items-center justify-center round-btn-48 shadow-2xl item-menu-2" href="/admin-add">
        <span class="material-icons-outlined md-48">
            add
        </span>
    </a>
    <div class="wrap item-menu-4">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Search...">
            <button type="submit" class="searchButton">
                <span class="material-icons-outlined md-48">
                    search
                </span>
            </button>
        </div>
    </div>
</div>
<div class="container-catalog py-16">
@foreach($titulos as $id => $title)
    <div class="catalog-card">
        <img src="{{$title['Link']}}" alt="{{asset('storage/img/dummy1.jpg')}}" srcset="">
        <div class="catalog-card-content">
            {{$title['Nombre']}}
        </div>
    </div>
@endforeach
</div>
@endsection
