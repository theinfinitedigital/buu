@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">แก้ไขคณะทำงาน</div>
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
                        <form action="{{ route('update_workgroup') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-10">
                                <a type="button" class="btn btn-secondary" href="/workgroup">กลับ</a>
                                <div class="row my-4 justify-content-center">
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        title_th *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('title_th') is-invalid @enderror" type="text" name="title_th" id="title_th" value="{{ $data->title_th }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        title_en *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('title_en') is-invalid @enderror" type="text" name="title_en" id="title_en" value="{{ $data->title_en }}" required>
                                    </div>
                                </div>

                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="{{ asset($data->path) }}" alt="" id="preview" width="400px">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        cover *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('path') is-invalid @enderror" type="file" name="path" id="path" onchange="get_images(event);">
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
        reader.readAsDataURL(event.target.files[0]);
    }

</script>
