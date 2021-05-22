@extends('layouts.index')
@section('content')
{{-- justify-items-center: center on x 
    items-center center on y --}}

<div class="grid grid-cols-1 justify-items-center py-4 h-full">
    <div class="bg-white rounded-lg shadow-lg flex flex-wrap w-auto my-10 p-0">
        <div class="w-full h-16 main-dark rounded-t-lg border-b-8 main-red-border"></div>
        <div class="mx-10 flex items-center justify-center">
            <form action="agregar-titulo" method="POST">
                @csrf
                <div class="flex flex-col my-2">
                    <label class="my-2" for="name">Title</label>
                    <input
                        class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none"
                        type="text" name="name" id="name" placeholder="name">
                </div>
                <div class="flex flex-col my-2">
                    <label class="my-2" for="username">Image link</label>
                    <input
                        class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none"
                        type="text" name="link" id="link" placeholder="link">
                </div>
                @if (session('error'))
                <p>{{session('error')}}</p>
                @endif
                <button type="submit" class="main-red text-white px-8 border rounded-full my-8">Add</button>
                {{-- <div class="flex flex-row my-10">
                    <input class="main-red rounded-full p-3 text-white w-2/5 text-lg" type="submit" value="Add">
                </div> --}}
            </form>
        </div>
    </div>
</div>

{{-- <div class="grid grid-cols-1 justify-items-center items center py-10  w-full">
    <div class="shadow-2xl container-sigup mx-3">
        <div class="main-dark lg:rounded-l-xl item-A-register">
            <h1 class="text-white font-bold item-A-register-title">Add Title</h1>
            <div class="flex flex-row item-A-register-links">
                <a class="no-underline text-main-red mr-2" href="">About</a>
                <a class="no-underline text-main-red mx-2" href="">Contact</a>
            </div>
        </div>
        <div class="bg-white lg:rounded-r-xl rounded-b-xl flex flex-col px-10 item-B-register">
            <form action="agregar-titulo" method="POST">
                    @csrf
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="name">Title</label>
                        <input class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none" type="text" name="name" id="name" placeholder="name">
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="my-2" for="username">Image link</label>
                        <input class="w-full py-2.5 px-4 rounded-lg bg-gray-100 focus:shadow focus:bg-gray-200 focus:outline-none" type="text" name="link" id="link" placeholder="link">
                    </div>
                     @if (session('error'))
                    <p>{{session('error')}}</p>
@endif
<div class="flex flex-row my-10">
    <input class="main-red rounded-full p-3 text-white w-2/5 text-lg" type="submit" value="Add">
</div>
</form>
</div>
</div>
</div>
</div> --}}
@endsection
