@extends('backend.layouts.master')

@section('title','Phong Vũ || Post Tag Create')

@section('css')
<link rel="stylesheet" href="{{ asset('backend-vendor/vendor/summernote/summernote.css') }}">
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('post-tag.store') }}">
                @csrf
                <div class="form-group">
                    <label for="inputTitle" class="col-lg-4 col-form-label">Name <span
                            class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter name" value="{{ old('name') }}"
                        class="form-control">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
