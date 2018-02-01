@extends('admin')

@section('content')
    <h3 class="h3-title">
        @if ($type == 'citi')
            Quản lý khách hàng Google Sheets (Citi)
        @elseif ($type == 'vpbank')
            Quản lý khách hàng Google Sheets (VPBank)
        @else
            Quản lý khách hàng Google Sheets
        @endif

    </h3>

    @include('flash_message')

    <div class="portlet-title">
        <div class="col-md-8">
            <a class="btn btn-default" href="{{ url('admin/chatfuel-customers') }}">Tất cả</a>
            <a class="btn btn-primary" href="{{ url('admin/chatfuel-customers?type=citi') }}">KH Citi</a>
            <a class="btn btn-danger" href="{{ url('admin/chatfuel-customers?type=vpbank') }}">KH VPBank</a>
            <button class="btn-warning btn" id="reload-iframe">Reload trang Citi</button>
            <span style="width: 400px;float: right;display: block;">
                <input style="width: 70%;display: inline-block;" name="salary" id="salary-input" placeholder="Lọc tiền lương" class="form-control">
                <button class="btn btn-primary" id="salary-btn">Lọc</button>
            </span>
        </div>
    </div>
    <div class="portlet-body form">
    </div>

    {{--<div>--}}
        {{--<a href="{{ url('admin/posts/add') }}" class="btn btn-primary">Thêm mới</a>--}}
    {{--</div>--}}

    <div class="row" style="margin-top: 20px">
        <div class="col-md-8">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                    <tr>
                        <th>Done?</th>
                        <th>Họ tên</th>
                        <th>Năm sinh</th>
                        <th>Khu vực</th>
                        <th>Quận</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Mức lương</th>
                        <th>Thắc mắc</th>
                        <th>Loại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col-md-4">
            <iframe id="citi-iframe" src="https://fast.accesstrade.com.vn/deep_link/4773432748394255215?url=http%3A%2F%2Fcitibank.vnfiba.com%2F" width="100%" height="1000">
                alternative content for browsers which do not support iframe.
            </iframe>
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
                url: '{{ url('admin/chatfuelAttribute.data') }}',
                data: function (d) {
                    d.type = '{{ $type }}';
                    d.search = $('#salary-input').val();
                }
            },
            columns: [
                {data: 'status', name: 'status'},
                {data: 'name', name: 'name'},
                {data: 'birthday', name: 'birthday'},
                {data: 'address', name: 'address'},
                {data: 'quan', name: 'quan'},
                {data: 'phone', name: 'phone'},
                {data: 'email', name: 'email'},
                {data: 'salary', name: 'salary'},
                {data: 'note', name: 'note'},
                {data: 'type', name: 'type'},
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

        $(document).on('click', '.go-done', function () {
            var thisHtml = $(this);
            var id = $(this).attr('data-id');

            $.ajax({
                url: '{{url('admin/update-customer')}}',
                type: 'get',
                data: {id: id},
                dataType: 'json',
                success: function (response) {
                    if (response.status == 0) {
                        swal(response.message, '', "error");
                    } else {
                        thisHtml.parent().find('.label').html('XONG');
                        thisHtml.parent().find('.label').removeClass('label-danger').addClass('label-success');
                        thisHtml.remove();
                    }
                },
                error: function (response) {

                }
            })
        });

        $(document).on('click', '.change-btn', function () {
            var id = $(this).attr('data-id');
            var to = $(this).attr('data-change');

            $.ajax({
                url: '{{url('admin/chatfuel-customers/change')}}',
                type: 'get',
                data: {id: id, to: to},
                dataType: 'json',
                success: function (response) {
                    if (response.status == 0) {
                        swal(response.message, '', "error");
                    } else {
                        swal(response.message, '', "success");
                        orderTable.ajax.reload();
                    }
                },
                error: function (response) {

                }
            })
        });

        $(document).on('click', '#salary-btn', function () {
            orderTable.ajax.reload();
        });

        $(document).on('click', '#reload-iframe', function () {
            document.getElementById('citi-iframe').src += '';
        });

    </script>

@endsection