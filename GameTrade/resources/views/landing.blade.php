@extends('layouts.index')
@section('content')
<div class="hero-landing">
    <div class="hero-landig-overlay">
        <h2>Share</h2>
        <h2>Search</h2>
        <h2>Exchange</h2>
    </div>
    <img class="hero-landing-image" src="{{asset('storage/img/landingHero.png')}} " alt="nada" srcset="">
</div>
<div class="grid grid-cols-1 justify-items-center items center py-10">
    <h3 class="text-2xl font-bold">Find the game you want</h3>
</div>
<div class="container-catalog">
    <div class="catalog-card">
        <img src="{{asset('storage/img/dummy1.jpg')}}" alt="" srcset="">
        <div class="catalog-card-content">
            Titulo de juego
        </div>
    </div>

    <div class="catalog-card">
        <img src="{{asset('storage/img/dummy1.jpg')}}" alt="" srcset="">
        <div class="catalog-card-content">
            Titulo de juego
        </div>
    </div>

    <div class="catalog-card">
        <img src="{{asset('storage/img/dummy1.jpg')}}" alt="" srcset="">
        <div class="catalog-card-content">
            Titulo de juego
        </div>
    </div>

    <div class="catalog-card">
        <img src="{{asset('storage/img/dummy1.jpg')}}" alt="" srcset="">
        <div class="catalog-card-content">
            Titulo de juego
        </div>
    </div>

    <div class="catalog-card">
        <img src="{{asset('storage/img/dummy1.jpg')}}" alt="" srcset="">
        <div class="catalog-card-content">
            Titulo de juego
        </div>
    </div>

    <div class="catalog-card">
        <img src="{{asset('storage/img/dummy1.jpg')}}" alt="" srcset="">
        <div class="catalog-card-content">
            Titulo de juego
        </div>
    </div>
    <div class="catalog-card">
        <img src="{{asset('storage/img/dummy1.jpg')}}" alt="" srcset="">
        <div class="catalog-card-content">
            Titulo de juego
        </div>
    </div>
    <div class="catalog-card">
        <img src="{{asset('storage/img/dummy1.jpg')}}" alt="" srcset="">
        <div class="catalog-card-content">
            Titulo de juego
        </div>
    </div>


</div>
<div class="grid grid-cols-1 justify-items-center items center py-10">
    <h3 class="text-xl font-bold py-6">And many more...</h3>
    <a class="py-6 inline-block bg-gradient-to-br from-red-400 to-red-600 py-4 px-12 rounded-full text-xl text-white uppercase tracking-wide shadow-xs hover:shadow-2xl active:shadow-xl transform hover:-translate-y-1 active:translate-y-0 transition duration-200 "
        href="{{route('register')}} ">Join now</a>
</div>

@endsection
