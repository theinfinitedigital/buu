@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('จัดการ Banner') }}</div>

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
                    <div class="row">
                        <div class="col-4">
                            <a type="button" class="btn btn-secondary" href="/">กลับ</a>
                            <a type="button" href="{{ route('add_index_banner') }}" class="btn btn-primary">เพิ่ม</a>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>img</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key => $item )
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td class="text-center">
                                    {{$item->path}}
                                        <!-- <img src="{{$item->path}}" alt="{{$item->alt}}" width="100px" height="100px"> -->
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="<?php echo '/edit/index_banner/'.$item->id.'&'.$item->uid ?>">แก้ไข</a>
                                        <a href="{{ route('del_index_banner',[$item->id]) }}" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไหม?');">ลบ</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">ไม่มีข้อมูล</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mt-2">
                                {{ $data->links() }}
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
