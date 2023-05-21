@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">แก้ไข Banner</div>
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
                        <div class="col-md-12">
                            
                            <a type="button" class="btn btn-secondary mb-2" href="/index-banner">กลับ</a>

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link <?php if($data->type == 'image'){echo 'active';} ?>" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">image</button>
                                    <button class="nav-link <?php if($data->type == 'video'){echo 'active';} ?>" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">video</button>
                                </div>
                            </nav>
                                        
                            <div class="tab-content" id="nav-tabContent">
                                
                                <div class="tab-pane fade <?php if($data->type == 'image'){echo 'active show';} ?>" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <form action="{{ route('update_index_banner') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mt-4">
                                            <input type="hidden" value="image" name="type">
                                            <input type="hidden" value="{{$data->type}}" name="type_ori">
                                            <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                            <div class="row my-4 justify-content-center">
                                                <div class="col-sm-3 col-md-3 col-lg-3">
                                                </div>
                                                <div class="col-sm-7 col-md-7 col-lg-7">
                                                    @if($data->type == 'image')
                                                    <img src="{{ asset($data->path) }}" alt="" id="preview" width="400px">
                                                    @else
                                                    <img src="" alt="" id="preview" width="400px" style="display: none;">
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="row my-4 justify-content-center">
                                                <div class="col-sm-3 col-md-3 col-lg-3">
                                                    path *
                                                </div>
                                                <div class="col-sm-7 col-md-7 col-lg-7">
                                                    <input class="form-control @error('path') is-invalid @enderror" type="file" name="path" id="path1" onchange="get_images(event);">
                                                </div>
                                            </div>

                                            
                                            <div class="row my-4 justify-content-center">
                                                <div class="col-sm-3 col-md-3 col-lg-3">
                                                    alt
                                                </div>
                                                <div class="col-sm-7 col-md-7 col-lg-7">
                                                    <input class="form-control @error('alt') is-invalid @enderror" type="text" name="alt" id="alt" value="{{ $data->alt }}">
                                                </div>
                                            </div>

                                            <div class="row my-4 justify-content-center">
                                                <div class="col-sm-3 col-md-3 col-lg-3">
                                                    enable *
                                                </div>
                                                <div class="col-sm-7 col-md-7 col-lg-7">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="enable" id="enable" <?php if($data->enable == 1){ echo 'checked';} ?> >
                                                        <label class="form-check-label" for="enable"></label>
                                                    </div>
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
                                <div class="tab-pane fade <?php if($data->type == 'video'){echo 'active show';} ?>" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <form action="{{ route('update_index_banner') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mt-4">
                                            <input type="hidden" value="video" name="type">
                                            <input type="hidden" value="{{$data->type}}" name="type_ori">
                                            <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                            <div class="row my-4 justify-content-center">
                                                <div class="col-sm-3 col-md-3 col-lg-3">
                                                    path *
                                                </div>
                                                <div class="col-sm-7 col-md-7 col-lg-7">
                                                    
                                                    @if($data->type == 'video')
                                                        <input class="form-control @error('path') is-invalid @enderror" type="text" name="path" id="path2" value="{{$data->path}}" required>
                                                    @else
                                                        <input class="form-control @error('path') is-invalid @enderror" type="text" name="path" id="path2" value="">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row my-4 justify-content-center">
                                                <div class="col-sm-3 col-md-3 col-lg-3">
                                                    enable *
                                                </div>
                                                <div class="col-sm-7 col-md-7 col-lg-7">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="enable" id="enable" <?php if($data->enable == 1){ echo 'checked';} ?> >
                                                        <label class="form-check-label" for="enable"></label>
                                                    </div>
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
        document.getElementById("preview").style.display = "block";
    }

</script>
