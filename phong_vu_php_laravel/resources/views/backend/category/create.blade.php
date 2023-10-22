@extends('backend.layouts.master')

@section('title','Phong Vũ || Category Create')

@section('css')
<link rel="stylesheet" href="{{ asset('backend-vendor/vendor/summernote/summernote.css') }}">
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('category.store') }}">
                @csrf
                <div class="form-group">
                    <label for="inputTitle" class="col-lg-4 col-form-label">Tên danh mục <span
                            class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter category name"
                        value="{{ old('name') }}" class="form-control">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Chọn danh mục cha</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">Chọn danh mục cha</option>
                        {!! $htmlOption !!}
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Summary</label>
                    <textarea class="form-control summernote" id="description"
                        name="description">{{ old('summary') }}</textarea>
                    @error('summary')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
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

@section('scripts')
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script src="{{ asset('backend-vendor/vendor/summernote/js/summernote.min.js') }}"></script>
<script src="{{ asset('backend-vendor/js/plugins-init/summernote-init.js') }}"></script>

<script>
$('#lfm').filemanager('image');

$(document).ready(function() {
    $('#description').summernote({
        placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
});
</script>
@endsection
