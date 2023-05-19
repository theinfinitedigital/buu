@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{ route('index_user') }}" type="button" class="btn btn-primary" >Users</a>
                    <a href="{{ route('index_role') }}" type="button" class="btn btn-primary" >Roles</a>
                    <a href="{{ route('index_categories') }}" type="button" class="btn btn-primary" >Categories</a>
                    <a href="{{ route('index_sub_categories') }}" type="button" class="btn btn-primary" >Sub Categories</a>
                    <a href="{{ route('index_general') }}" type="button" class="btn btn-primary" >Generals</a>
                    <a href="{{ route('index_workgroup') }}" type="button" class="btn btn-primary" >Working Group</a>
                    <a href="{{ route('index_department') }}" type="button" class="btn btn-primary" >Department</a>
                    <a href="{{ route('index_banner') }}" type="button" class="btn btn-primary" >Index Banner</a>
                    <a href="{{ route('index_personnel') }}" type="button" class="btn btn-primary" >Personnel</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
