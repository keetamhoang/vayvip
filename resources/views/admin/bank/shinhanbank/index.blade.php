@extends('admin')

@section('content')
    <h3 class="h3-title">
        Quản lý khách hàng <b>Shinhan Bank</b>
    </h3>

    @include('flash_message')

    @php $url = 'shinhanbank' @endphp

    <div class="portlet-title">
        <a class="btn btn-default" href="{{ url('admin/' . $url) }}">Tất cả</a>
        <a class="btn btn-danger" href="{{ url('admin/'.$url.'?status=waiting') }}">Chưa liên hệ</a>
        <a class="btn btn-primary" href="{{ url('admin/'.$url.'?status=processing') }}">Đang liên hệ</a>
        <a class="btn btn-success" href="{{ url('admin/'.$url.'?status=done') }}">Đã xong</a>
        {{--<span style="width: 300px;float: right;display: block;">--}}
            {{--<input style="width: 70%;display: inline-block;" name="salary" id="salary-input" placeholder="Lọc tiền lương" class="form-control">--}}
            {{--<button class="btn btn-primary" id="salary-btn">Lọc</button>--}}
        {{--</span>--}}
    </div>
    <div class="portlet-body form">
    </div>

    {{--<div>--}}
    {{--<a href="{{ url('admin/posts/add') }}" class="btn btn-primary">Thêm mới</a>--}}
    {{--</div>--}}

    <div class="row" style="margin-top: 20px">
        <table class="table table-striped table-bordered table-hover" id="orders-table">
            <thead>
            <tr>
                <th>Trạng thái</th>
                <th>Họ tên</th>
                <th>SĐT</th>
                <th>Mức lương</th>
                <th>Nghề nghiệp</th>
                <th>Tỉnh/TP</th>
                <th>Năm sinh</th>
                <th>Thắc mắc</th>
                <th>Email</th>
                <th>Ngày tạo</th>
                @if (auth('admin')->user()->type == 'admin')
                    <th>Ngày tạo</th>
                @endif
            </tr>
            </thead>
        </table>
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
                url: '{{ url('admin/shinhanBankAttribute.data') }}',
                data: function (d) {
                    d.status = '{{ Request::input('status') }}';
                    d.search = $('#salary-input').val();
                }
            },
            columns: [
                {data: 'status', name: 'status'},
                {data: 'name', name: 'name'},
                {data: 'phone', name: 'phone'},
                {data: 'salary', name: 'salary'},
                {data: 'job', name: 'job'},
                {data: 'region', name: 'address'},
                {data: 'birthday', name: 'birthday'},
                {data: 'note', name: 'note'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                @if (auth('admin')->user()->type == 'admin')
                    {data: 'hide', name: 'hide'},
                @endif
            ],

        });

        orderTable.on('xhr', function () {
            var data = orderTable.ajax.params();
        });

        $(document).on('change', '.status', function () {
            var customer_id = $(this).attr('data-customer-id');
            var html = $(this).children("option").filter(":selected").text();
            var status = $(this).val();

            bootbox.confirm({
                message: "Bạn muốn chuyển KH này sang trạng thái <b>" + html + '</b>?',
                buttons: {
                    confirm: {
                        label: 'Đồng ý',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'Không',
                        className: 'btn-danger'
                    }
                },

                callback: function (result) {
                    if (result == true) {
                        $.ajax({
                            type: 'GET',
                            data: {
                                customer_id: customer_id,
                                status: status,
                                bank: 'shinhanbank'
                            },
                            dataType: 'json',
                            url: '{{ url('admin/update-customer-status') }}',
                            success: function (response) {
                                if (response.status === 0) {
                                    swal(response.message, 'Vui lòng thử lại sau', "warning")
                                } else {
                                    swal(response.message, '', "success")
                                }
                            }
                        });
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

        $(document).on('click', '.hide-btn', function () {
            var id = $(this).attr('data-id');

            $.ajax({
                url: '{{url('admin/hide-customer-bank')}}',
                type: 'get',
                data: {id: id},
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