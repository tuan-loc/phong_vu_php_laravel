@extends('backend.layouts.master')

@section('title','Phong Vũ || Coupon Page')

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
                <span class="ml-1">Coupon List</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Coupon</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Coupon List</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between align-items-center">
                    <h4 class="card-title">Coupon List</h4>
                    <a href="{{ route('coupon.create') }}" class="btn btn-primary btn-sm float-right"
                        data-toggle="tooltip" data-placement="bottom" title="Add Coupon"><i class="fa fa-plus"></i> Add
                        Coupon</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if(count($coupons)>0)
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Coupon Code</th>
                                    <th>Type</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($coupons as $coupon)
                                <tr>
                                    <td>{{$coupon->id}}</td>
                                    <td>{{$coupon->code}}</td>
                                    <td>
                                        @if($coupon->type == 'fixed')
                                        <span class="badge badge-success">{{$coupon->type}}</span>
                                        @else
                                        <span class="badge badge-warning">{{$coupon->type}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($coupon->type == 'fixed')
                                        {{number_format($coupon->value)}} đ
                                        @else
                                        {{$coupon->value}}%
                                        @endif
                                    </td>
                                    <td>
                                        @if($coupon->status == 'active')
                                        <span class="badge badge-primary">{{$coupon->status}}</span>
                                        @else
                                        <span class="badge badge-danger">{{$coupon->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span>
                                            <a href="{{ route('coupon.edit', ['id' => $coupon->id]) }}" class="mr-4"
                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="" data-url="{{ route('coupon.destroy', ['id' => $coupon->id]) }}"
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
                                    <th>Coupon Code</th>
                                    <th>Type</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        @else
                        <h6 class="text-center">No coupons found!!! Please create coupon</h6>
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