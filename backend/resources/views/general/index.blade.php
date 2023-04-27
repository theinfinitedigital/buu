@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">แก้ไขประเภทข้อมูลทั่วไป</div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="demo-spacing-0 mb-1">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">ไม่สำเร็จ!</h4>
                            <div class="alert-body">
                                @foreach ($errors->all() as $error)
                                {{ $error }}
                                <br />
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row justify-content-center">
                        <form action="{{ route('update_general') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-10">
                                <a type="button" class="btn btn-secondary" href="/">กลับ</a>
                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="{{ asset($data->index_banner)  }}" alt="" id="preview5" width="400px">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        index_banner
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('index_banner') is-invalid @enderror" type="file" name="index_banner" id="index_banner" onchange="get_images(event,5);">
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        index_header_title
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('index_header_title') is-invalid @enderror" type="text" name="index_header_title" id="index_header_title" value="{{ $data->index_header_title }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        index_title_content
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('index_title_content') is-invalid @enderror" type="text" name="index_title_content" id="index_title_content" value="{{ $data->index_title_content }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        index_content
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea class="form-control @error('index_content') is-invalid @enderror" name="index_content" id="index_content" cols="30" rows="10">{{$data->index_content}}</textarea>
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        contact_us_th
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea class="form-control @error('contact_us_th') is-invalid @enderror" name="contact_us_th" id="contact_us_th" cols="30" rows="10">{{$data->contact_us_en}}</textarea>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        contact_us_en
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea class="form-control @error('contact_us_en') is-invalid @enderror" name="contact_us_en" id="contact_us_en" cols="30" rows="10">{{$data->contact_us_en}}</textarea>
                                    </div>
                                </div>
                                
                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="{{ asset($data->contact_us_path) }}" alt="" id="preview1" width="400px">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        contact_us_path
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('contact_us_path') is-invalid @enderror" type="file" name="contact_us_path" id="contact_us_path" onchange="get_images(event,1);">
                                    </div>
                                </div>
                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="{{ asset($data->contact_us_path_banner)  }}" alt="" id="preview2" width="400px">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        contact_us_path_banner
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('contact_us_path_banner') is-invalid @enderror" type="file" name="contact_us_path_banner" id="contact_us_path_banner" onchange="get_images(event,2);">
                                    </div>
                                </div>



                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        address_th
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea name="address_th" id="address_th" class="form-control @error('address_th') is-invalid @enderror"  cols="30" rows="10">{{ $data->address_th }}</textarea>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        address_en
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea name="address_en" id="address_en" class="form-control @error('address_en') is-invalid @enderror"  cols="30" rows="10">{{ $data->address_en }}</textarea>
                                    </div>
                                </div>
                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="{{ asset($data->address_path) }}" alt="" id="preview3" width="400px">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        address_path
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('address_path') is-invalid @enderror" type="file" name="address_path" id="address_path" onchange="get_images(event,3);">
                                    </div>
                                </div>
                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="{{ asset($data->address_path_banner)  }}" alt="" id="preview4" width="400px">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        address_path_banner
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('address_path_banner') is-invalid @enderror" type="file" name="address_path_banner" id="address_path_banner" onchange="get_images(event,4);">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        email *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ $data->email }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        tel *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('tel') is-invalid @enderror" type="number" name="tel" id="tel" value="{{ $data->tel }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        facebook *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('facebook') is-invalid @enderror" type="text" name="facebook" id="facebook" value="{{ $data->facebook }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        line *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('line') is-invalid @enderror" type="text" name="line" id="line" value="{{ $data->line }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        youtube *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('youtube') is-invalid @enderror" type="text" name="youtube" id="youtube" value="{{ $data->youtube }}" required>
                                    </div>
                                </div>



                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <button type="summit" class="btn btn-success">บันทึก</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script>
    function get_images(event,r){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview'+r);
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }

</script>
