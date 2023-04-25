@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">แก้ไขสิทธิ์การเข้าถึง</div>
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
                        <form action="{{ route('update_role') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-10">
                                <a type="button" class="btn btn-secondary" href="/role">กลับ</a>
                                <div class="row my-4 justify-content-center">
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        name *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $data->name }}" placeholder="สมชาย รักโลก" required>
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    <label class="form-label">
                                        กำหนดสิทธิ์การเข้าถึง *
                                    </label>
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        @foreach($settingdata as $item)
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="checkbox" name="permissions[]" id="permissions{{$item->id}}" value="{{$item->id}}" <?php if ($item->enable == 1) {
                                                    echo 'checked';
                                                } ?>/>
                                                <label class="form-check-label" for="permissions{{$item->id}}">{{ $item->setting->name}}</label>
                                            </div>
                                        @endforeach
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