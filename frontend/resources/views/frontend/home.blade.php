@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <bannercomponent status="1" data="test" src="images/Home/banner 1920x980.jpg"></bannercomponent>
    </div>
    <div class="mx-auto w-full h-auto">
        <div class="grid grid-cols-1 px-4 md:px-72 pt-96 pb-40 bg-top bg-cover"
            style="background-image: url('/images/Home/bg data center 2.png');">
            <div class="grid grid-cols-1 md:grid-cols-7  gap-10">
                <div class="md:col-span-4 rounded-xl text-center"><img class="w-auto h-full object-cover rounded-xl"
                        src="{{asset('images/Contact Us/IMG_3847.jpg')}}" alt="About Us Image"></div>
                <div class="md:col-span-3 mx-auto text-left bg-white/80 rounded-xl">
                    <div class="overflow-y-auto p-10 h-[506px]">
                        <h2 class="text-3xl text-primarybuu font-bold capitalize pb-2 text-center">About Us</h2>
                        <p class="text-lg text-neutralbuu indent-12 text-justify">ก้าวสำคัญของโลกอนาคตด้วยการขับเคลื่อนด้วยข้อมูล
                            เป็นสิ่งสำคัญที่จะต้องมีการเตรียมความพร้อมของการจัดเก็บข้อมูลที่ถูกต้อง
                            เข้าใจลักษณะพื้นฐานของข้อมูล มีกระบวนการจัดเก็บข้อมูลที่ถูกหลักการ
                            เพื่อสามารถนำข้อมูลไปใช้ประโยชน์ได้จริง การสร้างระบบจัดเก็บข้อมูลให้มีคุณภาพ เข้าถึงง่าย
                            จึงมีความจำเป็น ที่ทำให้ข้อมูลมีมาตรฐาน
                            สามารถยกระดับมูลค่าของข้อมูลในรูปแบบงานวิจัยทางวิทยาศาสตร์ และสังคมศาสตร์
                            พร้อมด้วยการวิเคราะห์ข้อมูลเพื่อตอบโจทย์ความต้องการของผู้ใช้บริการทั้งเกษตรกร แรงงาน ภาคเอกชน
                            และหน่วยงานรัฐบาล
                            ดังนั้น ทีมงาน มหาวิทยาลัยบูรพา วิทยาเขตจันทบุรี และทีมงานคณาจารย์ คณะวิทยาศาสตร์และศิลปศาสตร์
                            จึงได้เริ่มการจัดเก็บบัญชีข้อมูลโดยเริ่มต้นความร่วมมือจากหน่วยงานภาครัฐในจังหวัดจันทบุรี
                            เพื่อที่จะสร้างศูนย์ข้อมูลในภาคตะวันออก
                            ที่คาดหวังว่าสามารถตอบโจทย์ความต้องการของประชาชนในจังหวัดด้วยมูลค่าของข้อมูล
                            โดยเฉพาะอย่างยิ่งการช่วยเหลือกลุ่มเกษตรกรที่เป็นรากฐานสำคัญของประเทศไทย
                            นอกจากนี้ทางทีมงานวางแผนที่จะพัฒนาระบบฐานข้อมูล ๆ การใช้เทคโนโลยีด้านข้อมูล และสร้าง website
                            เพื่อเสนอข้อมูลด้วยภาพ รวมไปถึงระบบการพยากรณ์ต่าง ๆ
                            ที่ประชาชนสามารถเข้าถึงข้อมูลพื้นฐานทางการเกษตร และเศรษฐกิจได้
                            โดยศูนย์ข้อมูลแห่งนี้เกิดจากการเริ่มต้นจากศูนย์ข้อมูลทางการเกษตรในจังหวัดจันทบุรี
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto mb-[160px] w-full ">
        <div class="grid grid-cols-1 px-4 md:px-20">
            <div class="text-center mb-10">
                <h1 class="text-[50px] text-primarybuu font-bold uppercase pb-2">ข้อมูลให้บริการ</h1>
            </div>
            <dataservices></dataservices>
        </div>
    </div>
@endsection
