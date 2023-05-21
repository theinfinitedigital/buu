@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <bannercomponent status="1" data="test" src="images/Contact Us/banner 1920x980 02.jpg"></bannercomponent>
    </div>
    <div class="mx-auto w-full">
        <div class="grid grid-cols-1 bg-cover h-[120vh]" style="background-image: url('/images/Contact Us/bg contact 3.png')">
            <div class="flex flex-col justify-center px-4 md:py-20 md:px-60">
                <div class="text-center bg-white bg-opacity-60">
                    <div>
                        <div class="m-10 text-center text-primarybuu">
                            <h1 class="text-5xl font-bold capitalize pb-2">ข้อมูลติดต่อ</h1>
                            <p class="text-lg">contect us</p>
                            <img class="w-[340px] h-[486px] object-cover rounded-xl" src="https://via.placeholder.com/340x486">
                            <h2 class="text-3xl font-bold capitalize pb-2">ข้อมูลติดต่อ</h2>
                            <p class="text-lg">contect us</p>
                            <div class="flex"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto mt-[160px] w-full">
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
                            <p class="text-lg">xxxxxxxxxxx xxxxxx<br>(xxxxxxx)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 mb-[160px]">
        <div class="text-center mb-10">
            <h1 class="text-[50px] text-primarybuu font-medium uppercase pb-2">ตำแหน่งที่ตั้ง</h1>
        </div>
        <div class="relative">
            <img class="h-auto md:h-screen w-full object-cover object-center" src="https://via.placeholder.com/1920x686"
                alt="People working on laptops">
        </div>
        <div class="absolute bottom-10 left-10">
            <p class="text-lg text-neutralbuu">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus
                aut
                similique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quis et quam
                eveniet ducimus dolorum maiores porro.</p>
        </div>
    </div>
@endsection
