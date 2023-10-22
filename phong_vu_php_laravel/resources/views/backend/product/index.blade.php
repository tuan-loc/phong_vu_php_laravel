@extends('backend.layouts.master')

@section('title','Phong Vũ || Products Page')

@section('css')
<link href="{{ asset('backend-vendor/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('backend-vendor/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
@endsection

@section('main-content')

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span class="ml-1">Product List</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Product List</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between align-items-center">
                    <h4 class="card-title">Post List</h4>
                    <a href="{{route('product.create')}}" class="btn btn-primary btn-sm float-right"
                        data-toggle="tooltip" data-placement="bottom" title="Add Product"><i class="fa fa-plus"></i> Add
                        Product</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if(count($products)>0)
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Is Featured</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Condition</th>
                                    <th>Brand</th>
                                    <th>Stock</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                @php
                                $sub_cat_info=DB::table('categories')->select('name')->where('id',$product->child_cat_id)->get();
                                $brands=DB::table('brands')->select('name')->where('id',$product->brand_id)->get();
                                @endphp
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->cat_info['name']}}</td>
                                    <td>{{(($product->is_featured == 1) ? 'Yes': 'No')}}</td>
                                    <td>{{number_format($product->price)}} đ</td>
                                    <td> {{$product->discount}} % OFF</td>
                                    <td>{{$product->condition}}</td>
                                    <td> {{ucfirst($product->brand->name)}}</td>
                                    <td>
                                        @if($product->stock>0)
                                        <span class="badge badge-success">{{$product->stock}}</span>
                                        @else
                                        <span class="badge badge-danger">{{$product->stock}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->photo)
                                        @php
                                        $photo=explode(',',$product->photo);
                                        @endphp
                                        <img src="{{$photo[0]}}" class="img-fluid zoom" style="max-width:80px"
                                            alt="{{$product->photo}}">
                                        @else
                                        <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid"
                                            style="max-width:80px" alt="avatar.png">
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->status == 'active')
                                        <span class="badge badge-primary">{{$product->status}}</span>
                                        @else
                                        <span class="badge badge-danger">{{$product->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span>
                                            <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="mr-4"
                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="" data-url="{{ route('product.destroy', ['id' => $product->id]) }}"
                                                data-toggle="tooltip" data-placement="top" title="Close"
                                                class="action_delete"><i class="fa fa-close color-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Is Featured</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Condition</th>
                                    <th>Brand</th>
                                    <th>Stock</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        @else
                        <h6 class="text-center">No products found!!! Please create product</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('backend-vendor/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend-vendor/js/plugins-init/datatables.init.js') }}"></script>
<script src="{{ asset('backend-vendor/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>

<script>
function actionDelete(event) {
    event.preventDefault();
    let urlRequest = $(this).data("url");
    let that = $(this);

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: urlRequest,
                success: function(data) {
                    if (data.code == 200) {
                        var table = $('#example').DataTable();
                        var rows = table
                            .rows(that.closest('tr'))
                            .remove()
                            .draw();
                        Swal.fire(
                            "Deleted!",
                            "Your file has been deleted.",
                            "success"
                        );
                    }
                },
            });
        }
    });
}

$(function() {
    $(document).on("click", ".action_delete", actionDelete);
});
</script>
@endsection
