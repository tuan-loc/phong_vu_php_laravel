@extends('backend.layouts.master')

@section('title','Phong Vũ || Banner Page')

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
                <span class="ml-1">Banner List</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Banner</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Banner List</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between align-items-center">
                    <h4 class="card-title">Banner List</h4>
                    <a href="{{route('banner.create')}}" class="btn btn-primary btn-sm float-right"
                        data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fa fa-plus"></i> Add
                        Banner</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if(count($banners)>0)
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $banner)
                                <tr>
                                    <td>{{$banner->id}}</td>
                                    <td>{{$banner->name}}</td>
                                    <td>{{$banner->slug}}</td>
                                    <td>
                                        @if($banner->photo)
                                        <img src="{{$banner->photo}}" class="img-fluid zoom" style="max-width:120px"
                                            alt="{{$banner->photo}}">
                                        @else
                                        <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid zoom"
                                            style="max-width:100%" alt="avatar.png">
                                        @endif
                                    </td>
                                    <td>
                                        @if($banner->status=='active')
                                        <span class="badge badge-primary">{{$banner->status}}</span>
                                        @else
                                        <span class="badge badge-danger">{{$banner->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span>
                                            <a href="{{ route('banner.edit', ['id' => $banner->id]) }}" class="mr-4"
                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="" data-url="{{ route('banner.destroy', ['id' => $banner->id]) }}"
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
                                    <th>Slug</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        @else
                        <h6 class="text-center">No banners found!!! Please create banner</h6>
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
