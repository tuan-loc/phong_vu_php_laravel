@extends('backend.layouts.master')

@section('title','Phong Vũ || Post Edit')

@section('css')
<link rel="stylesheet" href="{{ asset('backend-vendor/vendor/summernote/summernote.css') }}">
<link rel="stylesheet" href="{{ asset('backend-vendor/vendor/select2/css/select2.min.css') }}">
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('post.update', ['id' =>  $post->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="inputTitle" class="col-lg-4 col-form-label">Title <span
                            class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter title" value="{{ $post->name }}"
                        class="form-control">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Quote </label>
                    <textarea class="form-control summernote" id="quote" name="quote">{{ $post->quote }}</textarea>
                    @error('quote')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputTitle" class="col-lg-4 col-form-label">Summary <span
                            class="text-danger">*</span></label>
                    <textarea class="form-control summernote" id="summary"
                        name="summary">{{ $post->summary }}</textarea>
                    @error('summary')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Description </label>
                    <textarea class="form-control summernote" id="description"
                        name="description">{{ $post->description }}</textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="post_cat_id">Category <span class="text-danger">*</span></label>
                    <select name="post_cat_id" class="form-control">
                        <option value="">-- Select any category --</option>
                        @foreach($categories as $key=>$data)
                        <option value='{{$data->id}}' {{(($data->id==$post->post_cat_id) ? 'selected' : '')}}>
                            {{$data->name}}</option>
                        @endforeach
                    </select>
                </div>

                @php
                $post_tags=explode(',', $post->tags);
                @endphp
                <div class="form-group">
                    <label for="tags">Tag</label>
                    <select name="tags[]" id="multi-value-select" multiple="" data-select2-id="multi-value-select"
                        tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                        @foreach($tags as $key=>$data)
                        <option value="{{$data->name}}" {{(( in_array("$data->name",$post_tags)) ? 'selected' : '')}}>
                            {{$data->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="added_by">Author</label>
                    <select name="added_by" class="form-control">
                        @foreach($users as $key=>$data)
                        <option value='{{$data->id}}' {{(($post->added_by == $data->id)? 'selected' : '')}}>
                            {{$data->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ $post->photo }}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    <img src="{{$post->photo}}" width="200px" alt="{{$post->name}}">
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active" {{(($post->status=='active')? 'selected' : '')}}>Active</option>
                        <option value="inactive" {{(($post->status=='inactive')? 'selected' : '')}}>Inactive</option>
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
<script src="{{ asset('backend-vendor/vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('backend-vendor/js/plugins-init/select2-init.js') }}"></script>

<script>
$('#lfm').filemanager('image');

$(document).ready(function() {
    $('#description').summernote({
        placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
});

$(document).ready(function() {
    $('#summary').summernote({
        placeholder: "Write short summary.....",
        tabsize: 2,
        height: 150
    });
});

$(document).ready(function() {
    $('#quote').summernote({
        placeholder: "Write short quote.....",
        tabsize: 2,
        height: 150
    });
});
</script>
@endsection
