@extends('admin')

@section('content')
    <h3 class="h3-title">
        @if ($type == 'het-han')
            Quản lý khuyến mại đã hết hạn
        @elseif ($type == 'con-han')
            Quản lý khuyến mại còn hiệu lực
        @else
            Quản lý khuyến mại (Tất cả)
        @endif

    </h3>

    @include('flash_message')

    <div class="portlet-title">

    </div>
    <div class="portlet-body form">
    </div>

    {{--<div>--}}
        {{--<a href="{{ url('admin/posts/add') }}" class="btn btn-primary">Thêm mới</a>--}}
    {{--</div>--}}

    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>

                    <tr>
                        <th>#</th>
                        <th>HOT?</th>
                        <th>Tên</th>
                        <th>Ảnh banner</th>
                        <th>Thời gian</th>
                        <th>Có Coupon?</th>
                        <th>Nguồn</th>
                        <th>Phân danh mục</th>
                        <th>Mô tả</th>
                        <th>View Total</th>
                        <th>Hành động</th>
                    </tr>

                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Thông tin chiết khấu</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th> Ngành hàng </th>
                            <th> Chiết khấu </th>
                        </tr>
                        </thead>
                        <tbody id="modal-body">
                        <tr>
                            <td> 2 </td>
                            <td> Larry </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection

@section('scripts')

    <script>

        var orderTable = $('#orders-table').DataTable({
            processing: true,
            bServerSide: true,
            // "order": [[0, "desc"]],
//            dom: 'lBfrtip',
            "aaSorting": [],
            // scrollX: true,
//            stateSave: true,
//            buttons: [
//                {extend: 'colvis', text: '<i class="fa fa-list-ul"></i>'}
//            ],
            searching: false,
            ajax: {
                url: '{{ url('admin/discountAttribute.data') }}',
                data: function (d) {
                    d.type = '{{ $type }}'
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'is_hot', name: 'is_hot'},
                {data: 'name', name: 'name'},
                {data: 'image', name: 'image'},
                {data: 'time', name: 'time'},
                {data: 'is_coupon', name: 'is_coupon'},
                {data: 'merchant', name: 'merchant'},
                {data: 'discount_category_id', name: 'discount_category_id'},
                {data: 'content', name: 'content'},
                {data: 'count_view', name: 'count_view'},
                {data: 'action', name: 'action'},
            ],

        });

        orderTable.on('xhr', function () {
            var data = orderTable.ajax.params();
        });

        $(document).on('click', '.status-btn', function () {
            var status = $(this).attr('data-status');
            var brand_id = $(this).attr('data-brand-id');

            $.ajax({
                type: 'POST',
                data: {
                    brand_id: brand_id,
                    status: status,
                },
                dataType: 'json',
                url: '{{ url('admin/brands/update-status-brand') }}',
                success: function (response) {
                    if (response.status === 0) {
                        swal(response.message, '', "warning")
                    } else {
                        swal(response.message, '', "success");
                        orderTable.ajax.reload();
                    }
                }
            });
        });

        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();
            link = this;

            swal({
                    title: "Bạn muốn xóa khuyến mại này?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Đồng ý xóa",
                    closeOnConfirm: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        window.location = link.href;
                    } else {
                        return false;
                    }
                });
        });

        function getOrderAttr() {
            orderTable.ajax.reload();
        }

        $(document).on('click', '.ck-btn', function () {
            var id = $(this).attr('data-brand-id');

            $.ajax({
                url: '{{url('admin/get-ck-by-brand-id')}}',
                type: 'get',
                data: {id: id},
                dataType: 'html',
                success: function (response) {
                    $('#modal-body').html(response);
                    $('#basic').modal('show');
                },
                error: function (response) {
                    $('#order-detail').html('');
                }
            })
        });

        $(document).ready(function () {
            $(document).on('change', '.phanmuc', function () {
                var id = $(this).attr('data-id');
                var value = $(this).val();

                $.ajax({
                    url: '{{ url('/admin/don-vi-khuyen-mai/phan-loai/change') }}',
                    dataType: 'json',
                    type: 'post',
                    data : {
                        id: id,
                        value: value
                    },
                    success: function (response) {
                        if (response.status == 1) {
                            swal(response.message, '', 'success');
                        } else {
                            swal(response.message, '', 'warning');
                        }
                    }
                });
            });
        });

    </script>

@endsection