@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">แก้ไขบุคลากร</div>
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
                        <form action="{{ route('update_personnel') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-10">
                                <a type="button" class="btn btn-secondary" href="/personnel">กลับ</a>
                                <div class="row my-4 justify-content-center">
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        name_surname_th *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('name_surname_th') is-invalid @enderror" type="text" name="name_surname_th" id="name_surname_th" value="{{ $data->name_surname_th }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        name_surname_en *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('name_surname_en') is-invalid @enderror" type="text" name="name_surname_en" id="name_surname_en" value="{{ $data->name_surname_en }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        department *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <select class="form-control @error('department_id') is-invalid @enderror" name="department_id" id="department_id" required>
                                            <option value="" disabled>select</option>
                                            @foreach($department as $item)
                                                <option value="{{$item->id}}" <?php if($data->department_id == $item->id){ echo 'selected';} ?>>{{$item->title_th}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    position *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('position') is-invalid @enderror" type="text" name="position" id="position" value="{{ $data->position }}" required>
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    detail
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" id="detail" cols="30" rows="10">{{ $data->detail }}</textarea>
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
                                        path
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('path') is-invalid @enderror" type="file" name="path" id="path" onchange="get_images(event);">
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        alt
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('alt') is-invalid @enderror" type="text" name="alt" id="alt" value="{{ $data->alt }}" >
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
