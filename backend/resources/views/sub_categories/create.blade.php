@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">เพิ่มประเภทย่อย</div>
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
                        <form action="{{ route('create_sub_categories') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-10">
                                <a type="button" class="btn btn-secondary" href="/sub-categories">กลับ</a>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        categories *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <select class="form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" id="categorie_id" required>
                                            <option value="" selected disabled>select</option>
                                            @foreach($categorie as $item)
                                                <option value="{{$item->id}}">{{$item->title_th}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                             
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
                                        path *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('path') is-invalid @enderror" type="file" name="path" id="path" onchange="get_images(event);" required>
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

</script>
