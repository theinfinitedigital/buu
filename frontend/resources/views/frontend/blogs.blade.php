@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <bannercomponent status="1" data="test" src="images/Home/banner 1920x980.jpg"></bannercomponent>
    </div>

    <div class="mx-auto mb-40 mt-16 w-full">
        <div class="grid grid-cols-1 px-4 md:px-20 ">
            <div class="text-center mb-10">
                <h1 class="text-[50px] text-primarybuu font-bold uppercase pb-2">ข้อมูลให้บริการ</h1>
            </div>
            <dataservices></dataservices>
        </div>
    </div>
@endsection
