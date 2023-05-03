@extends('layouts.app')
@section('content')
    <div class="grid grid-cols-1">
        <div class="relative">
            <img class="h-auto md:h-screen w-full object-cover object-center"
                src="{{ asset('images/Home/banner 1920x980.jpg') }}" alt="People working on laptops" />
        </div>
        <div class="absolute bottom-10 left-10">
            <p class="text-lg text-neutralbuu">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus
                aut
                similique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quis et quam
                eveniet ducimus dolorum maiores porro.</p>
        </div>
    </div>
    <div class="mx-auto mb-5 mt-10 w-full">
        <div class="grid grid-cols-1 px-4 md:px-20 ">
            <div class="flex justify-center mb-10 bg-secondarybuu rounded-xl">
                <div class="rounded-l-xl text-center w-1/2">
                    <img class="w-full h-auto object-cover rounded-l-xl" src="https://via.placeholder.com/715x389">
                </div>
                <div class="rounded-r-xl text-center w-1/2">
                    <div>
                        <div class="m-10 text-center text-white">
                            <h2 class="text-3xl font-bold capitalize pb-2">เกี่ยวกับเรา</h2>
                            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat
                                temporibus aut
                                similique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quis
                                et quam
                                eveniet ducimus dolorum maiores porro. Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit.
                                Iusto, at laboriosam corrupti ab dignissimos perferendis neque. Quia cupiditate nobis
                                repudiandae
                                hic unde iste. Rerum dolore inventore beatae earum, eveniet doloremque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto mb-5 mt-16 w-full">
        <div class="grid grid-cols-1 px-4 md:px-[286px] ">
            <div class="text-center mb-10">
                <h1 class="text-[50px] text-primarybuu font-medium uppercase pb-2">โครงสร้างการบริหาร</h1>
            </div>
            <div class="flex justify-center mb-10">
                <div class="rounded-xl text-center w-1/2">
                    <img class="w-[340px] h-[486px] object-cover rounded-xl" src="https://via.placeholder.com/340x486">
                </div>
                <div class="text-center w-1/2">
                    <div>
                        <div class="m-auto text-center text-neutralbuu">
                            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat
                                temporibus aut
                                similique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quis
                                et quam
                                eveniet ducimus dolorum maiores porro. Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit.
                                Iusto, at laboriosam corrupti ab dignissimos perferendis neque. Quia cupiditate nobis
                                repudiandae
                                hic unde iste. Rerum dolore inventore beatae earum, eveniet doloremque.</p>
                        </div>
                    </div>
                    <div>
                        <div class="m-auto text-center justify-end text-neutralbuu">
                            <p class="text-lg">xxxxxxxxxxx    xxxxxx<br>(xxxxxxx)</p>
                        </div>
                    </div>
                </div>
            </div>
            @for ($q = 0; $q < 3; $q++)
            <div class="text-start mb-10">
                <h1 class="text-[40px] text-primarybuu font-medium uppercase pb-2">คณะที่ {{$q+1}}</h1>
            </div>
            <div class="grid grid-cols-3 gap-5 justify-items-stretch mb-10">
                @for ($i = 0; $i < 3; $i++)
                <div class="rounded-xl text-center ">
                    <img class="w-[340px] h-[486px] object-cover rounded-xl" src="https://via.placeholder.com/340x486">
                </div>
                @endfor
            </div>
            @endfor
        </div>
    </div>
@endsection
