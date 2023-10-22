@extends('backend.layouts.master')

@section('title','Phong Vũ || Product Create')

@section('css')
<link rel="stylesheet" href="{{ asset('backend-vendor/vendor/summernote/summernote.css') }}">
<style>
.select2-selection__choice {
    background: #1b2d1f !important;
}

.image_detail_product,
.feature_image {
    height: 120px;
    object-fit: cover;
}

.container_image_detail,
.feature_image_container {
    margin-top: 20px;
}
</style>
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('product.update', ['id' => $product->id]) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputTitle" class="col-lg-4 col-form-label">Product name <span
                            class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter title"
                        value="{{ $product->name }}" class="form-control">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Summary </label>
                    <textarea class="form-control summernote" id="summary"
                        name="summary">{{ $product->summary }}</textarea>
                    @error('summary')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Description </label>
                    <textarea class="form-control summernote" id="description"
                        name="description">{{ $product->description }}</textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Detail </label>
                    <textarea class="form-control summernote" id="detail"
                        name="detail">{{ $product->detail }}</textarea>
                    @error('detail')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="is_featured">Is Featured</label><br>
                    <input type="checkbox" name='is_featured' id='is_featured' value='{{$product->is_featured}}'
                        {{(($product->is_featured) ? 'checked' : '')}}> Yes
                </div>

                <div class="form-group">
                    <label for="cat_id">Category <span class="text-danger">*</span></label>
                    <select name="cat_id" id="cat_id" class="form-control">
                        <option value="">-- Select any category --</option>
                        {!! $htmlOption !!}
                    </select>
                </div>

                <div class="form-group">
                    <label for="price" class="col-lg-4 col-form-label">Price <span class="text-danger">*</span></label>
                    <input id="price" type="number" name="price" placeholder="Enter price" value="{{ $product->price }}"
                        class="form-control">
                    @error('price')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="discount" class="col-lg-4 col-form-label">Discount(%) <span
                            class="text-danger">*</span></label>
                    <input id="discount" type="number" name="discount" placeholder="Enter discount"
                        value="{{ $product->discount }}" class="form-control">
                    @error('discount')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="brand_id">Brand</label>
                    <select name="brand_id" class="form-control">
                        <option value="">-- Select Brand --</option>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}" {{(($product->brand_id == $brand->id)? 'selected':'')}}>
                            {{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="condition">Condition</label>
                    <select name="condition" class="form-control">
                        <option value="">-- Select Condition --</option>
                        <option value="default" {{(($product->condition=='default')? 'selected':'')}}>Default</option>
                        <option value="new" {{(($product->condition=='new')? 'selected':'')}}>New</option>
                        <option value="hot" {{(($product->condition=='hot')? 'selected':'')}}>Hot</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="stock">Quantity <span class="text-danger">*</span></label>
                    <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"
                        value="{{ $product->stock }}" class="form-control">
                    @error('stock')
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
                        <input id="thumbnail" class="form-control" type="text" name="photo"
                            value="{{ $product->photo }}">
                    </div>
                    <img src="{{$product->photo}}" width="500px" alt="{{$product->name}}">
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image Details</label>
                    <input type="file" class="form-control-file" name="image_path[]" multiple>
                    <div class="col-md-12 container_image_detail">
                        <div class="row">
                            @foreach($product->productImages as $productImageItem)
                            <div class="mr-3">
                                <img class="image_detail_product" src="{{$productImageItem->image_path}}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
                        <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
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

$(document).ready(function() {
    $('#summary').summernote({
        placeholder: "Write short summary.....",
        tabsize: 2,
        height: 150
    });
});
</script>
@endsection