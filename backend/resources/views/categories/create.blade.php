@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">เพิ่มประเภท</div>
                <div class="card-body">

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
                        <form action="{{ route('create_categories') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-10">
                                <a type="button" class="btn btn-secondary" href="/categories">กลับ</a>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        title_th *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('title_th') is-invalid @enderror" type="text" name="title_th" id="title_th" value="{{ old('title_th') }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        title_en *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('title_en') is-invalid @enderror" type="text" name="title_en" id="title_en" value="{{ old('title_en') }}" required>
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        description_th
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea name="des_th" id="des_th" class="form-control @error('des_th') is-invalid @enderror"  cols="30" rows="10">{{ old('des_th') }}</textarea>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        description_en
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea name="des_en" id="des_en" class="form-control @error('des_en') is-invalid @enderror"  cols="30" rows="10">{{ old('des_en') }}</textarea>
                                    </div>
                                </div>

                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="" alt="" id="preview" width="400px" style="display: none;">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        cover *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('cover_path') is-invalid @enderror" type="file" name="cover_path" id="cover_path" onchange="get_images(event);" required>
                                    </div>
                                </div>
                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="" alt="" id="preview2" width="400px" style="display: none;">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        banner *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('banner_path') is-invalid @enderror" type="file" name="banner_path" id="banner_path" onchange="get_images1(event);" required>
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
    function get_images(event){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview');
            output.src = reader.result;
        };
        document.getElementById('preview').style.display='block'
        reader.readAsDataURL(event.target.files[0]);
    }
    function get_images1(event){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview2');
            output.src = reader.result;
        };
        document.getElementById('preview2').style.display='block'
        reader.readAsDataURL(event.target.files[0]);
    }

</script>
