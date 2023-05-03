@extends('layouts.app')
@section('content')
    <div class="grid grid-cols-1">
        <div class="relative">
            <img class="h-auto md:h-screen w-full object-cover object-center" src="{{asset('images/Home/banner 1920x980.jpg')}}"
                alt="People working on laptops" />
        </div>
        <div class="absolute bottom-10 left-10">
            <p class="text-lg text-neutralbuu ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus
                aut
                similique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quis et quam
                eveniet ducimus dolorum maiores porro.</p>
        </div>
    </div>
    <div class="mx-auto mb-5 mt-10 w-full">
        <div class="grid grid-cols-1 px-4 md:px-20 ">
            <div class="text-center mb-10">
                <h1 class="text-[50px] text-primarybuu font-bold uppercase pb-2">DATA CENTER</h1>
            </div>
            <div class="flex justify-center mb-10">
                <div class="rounded-xl text-center ">
                    <img class="w-full h-auto object-cover rounded-xl" src="https://via.placeholder.com/715x389">
                </div>
            </div>
            <div>
                <div class="mx-auto max-w-[1782px] mb-10 text-center">
                    <h2 class="text-3xl text-primarybuu font-bold capitalize pb-2">Content 1</h2>
                    <p class="text-lg text-neutralbuu ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat
                        temporibus aut
                        similique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quis et quam
                        eveniet ducimus dolorum maiores porro. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Iusto, at laboriosam corrupti ab dignissimos perferendis neque. Quia cupiditate nobis repudiandae
                        hic unde iste. Rerum dolore inventore beatae earum, eveniet doloremque.</p>
                    <div class="mt-20 mb-5 mx-auto w-1/12">
                        <a href="#" class="">
                            <button
                                class="py-2 px-4 bg-secondarybuu text-white text-sm capitalize rounded-xl shadow-xl h-10 w-auto">
                                read more
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto mb-5 mt-16 w-full">
        <div class="grid grid-cols-1 px-4 md:px-20 ">
            <div class="text-center mb-10">
                <h1 class="text-[50px] text-primarybuu font-bold uppercase pb-2">ข้อมูลให้บริการ</h1>
            </div>
            <div class="grid grid-cols-3 gap-24 justify-items-center mb-10">
                @for ($i = 0; $i < 11; $i++)
                    <div
                        class="flex flex-col p-5 mb-10 w-[472px] h-[452px] rounded-xl bg-white shadow-[1px_1px_10px_0_rgba(0,0,0,0.3)]">
                        <div>
                            <img class="w-full h-auto object-cover rounded-xl" src="https://via.placeholder.com/433x299">
                        </div>
                        <div class="text-start pt-5">
                            <h2 class="text-3xl text-primarybuu font-bold capitalize pb-2">Agriculture</h2>
                            <p class="text-lg text-neutralbuu indent-6">การเกษตร ภาคตะวันออก</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
