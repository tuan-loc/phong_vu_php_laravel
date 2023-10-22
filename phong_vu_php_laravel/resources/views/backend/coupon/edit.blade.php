@extends('backend.layouts.master')

@section('title','Phong Vũ || Coupon Edit')

@section('css')
<link rel="stylesheet" href="{{ asset('backend-vendor/vendor/summernote/summernote.css') }}">
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('coupon.update', ['id' => $coupon->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="inputTitle" class="col-lg-4 col-form-label">Coupon Code <span
                            class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="code" placeholder="Enter coupon code"
                        value="{{ $coupon->code }}" class="form-control">
                    @error('code')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputTitle" class="col-lg-4 col-form-label">Type <span
                            class="text-danger">*</span></label>
                    <select class="form-control" name="type">
                        @if($coupon->type == 'fixed')
                        <option value="fixed" selected>Fixed</option>
                        <option value="percent">Percent</option>
                        @else
                        <option value="fixed">Fixed</option>
                        <option value="percent" selected>Percent</option>
                        @endif
                    </select>
                    @error('type')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputTitle" class="col-lg-4 col-form-label">Value <span
                            class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="value" placeholder="Enter coupon value"
                        value="{{ $coupon->value }}" class="form-control">
                    @error('value')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active" {{(($coupon->status=='active')? 'selected' : '')}}>Active</option>
                        <option value="inactive" {{(($coupon->status=='inactive')? 'selected' : '')}}>Inactive</option>
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
