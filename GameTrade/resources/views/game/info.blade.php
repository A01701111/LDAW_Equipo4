@extends('layouts.index')
@section('content')
<div class="grid grid-cols-1 justify-items-center py-4 h-full">
    <div class="bg-white rounded-lg shadow-lg flex flex-wrap w-5/6 my-10 p-0"> {{-- Container login --}}
        <div class="w-full h-16 main-dark rounded-t-lg border-b-8 main-red-border"></div>
        <div class="game-container m-10">
            {{-- <div class="grid grid-cols-1 justify-items-center self-center w-full mx-4 md:mx-14"> --}}
            <div class="flex">
                <div class="w-3/12">
                    <img src="{{asset('storage/img/dummy1.jpg')}} " alt="nada" srcset="">
                </div>
                <div class="ml-8 w-2/6">
                    <h1 class="mb-10 border-b border-gray-300 leading-10 py-2 text-xl font-bold tracking-wider">Game
                        Name</h1>
                    <h3 class=" border-b border-gray-300 leading-10 py-2 text-base">5/5</h3>
                    <h3 class=" border-b border-gray-300 leading-10 py-2 text-base">Edition</h3>
                    <h3 class=" border-b border-gray-300 leading-10 py-2 text-base">Version</h3>
                    <h3 class=" border-b border-gray-300 leading-10 py-2 text-base">Console</h3>
                </div>
            </div>
            <div>
                <a class="rounded-full main-dark flex items-center justify-center round-btn-48 shadow-2xl item-menu-2"
                    href="/admin-add">
                    <span class="material-icons-outlined md-48">
                        add
                    </span>
                </a>
            </div>
            <section>
                <h2 class="my-5 border-b border-gray-300 leading-10  text-lg font-bold tracking-wider">Reviews</h2>
                <form action="">
                @csrf
                <div class="box border rounded flex flex-col shadow bg-white my-5">
                    <textarea placeholder="Write your review here"
                        class="text-grey-darkest flex-1 p-2 m-1 bg-transparent" name="review"></textarea>
                    <div class="bg-gray-100 px-3 py-2 border-t rounded-b flex justify-end">
                        <button class="main-red text-white px-8 py-2 border rounded-full" type="submit">
                            Accept
                        </button>
                    </div>
                </form>
                </div>
                <div class="border-b border-gray-300">
                    <div class="flex py-5 border-b border-gray-300">
                        <span class="material-icons-outlined md-100">
                            account_circle
                        </span>
                        <div class="pl-8">
                            <h3 class="my-3">USERNAME</h3>
                            <h3 class="my-3">5/5</h3>
                        </div>
                    </div>
                    <p class="my-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed autem omnis doloremque repellendus ea. Pariatur ducimus ut temporibus ab unde culpa perferendis. Odio earum ut laudantium incidunt quaerat optio. Dolorum ipsum ullam cupiditate illum consequuntur quod quisquam! Alias explicabo at nam consectetur nesciunt est tempora impedit tempore dignissimos vitae, voluptates vero totam hic laboriosam similique, quidem labore aspernatur esse odit delectus cumque. Sapiente sit nihil veniam saepe animi omnis, similique corporis! Incidunt saepe ipsam dolores soluta eius natus perspiciatis maiores! Delectus quibusdam possimus quis itaque inventore, deserunt cum dolor vitae iste sunt, expedita quo totam, pariatur voluptate dignissimos illum cumque aut cupiditate repellat dolorem porro! Vel eligendi molestias commodi earum ipsam esse fugit, impedit magnam praesentium nihil tempora rem? Qui ullam aspernatur laborum sequi repudiandae quia natus temporibus laudantium hic in praesentium odit molestiae modi, ad necessitatibus! Voluptatibus.</p>
                </div>
            </section>
        </div>

    </div>

</div>
</div>
@endsection
