@extends('admin')

@section('content')
    <h3 class="h3-title">
        @if ($type == 'vay-von')
            Quản lý khách hàng vay vốn
        @elseif ($type == 'san-pham')
            Quản lý khách hàng đăng ký tư vấn sản phẩm
        @else
            Quản lý khách hàng (Tất cả)
        @endif

    </h3>

    @include('flash_message')

    <div class="portlet-title">
        <a class="btn btn-default" href="{{ url('admin/customers') }}">Tất cả</a>
        <a class="btn btn-primary" href="{{ url('admin/customers?type=vay-von') }}">KH vay vốn</a>
        <a class="btn btn-danger" href="{{ url('admin/customers?type=san-pham') }}">KH sản phẩm</a>
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

                @if ($type == 'vay-von')
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Ngân hàng</th>
                        <th>Cập nhật</th>
                        <th>Hành động</th>
                    </tr>
                @elseif ($type == 'san-pham')
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Sản phẩm</th>
                        <th>Cập nhật</th>
                        <th>Hành động</th>
                    </tr>
                @else
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Loại KH</th>
                        <th>Cập nhật</th>
                        <th>Hành động</th>
                    </tr>
                @endif

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
                url: '{{ url('admin/customerAttribute.data') }}',
                data: function (d) {
                    d.type = '{{ $type }}'
                }
            },
            columns: [
                @if ($type == 'vay-von')
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'phone', name: 'phone'},
                {data: 'email', name: 'email'},
                {data: 'bank', name: 'bank'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action'},
                @elseif ($type == 'san-pham')
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'phone', name: 'phone'},
                {data: 'email', name: 'email'},
                {data: 'post_id', name: 'post_id'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action'},
                @else
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'phone', name: 'phone'},
                {data: 'email', name: 'email'},
                {data: 'source', name: 'source'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action'},
            @endif

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
                    title: "Bạn muốn xóa khách hàng này?",
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

    </script>

@endsection