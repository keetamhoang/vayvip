<div class="form-group" style="width: 150px;">
    <select class="form-control status" data-customer-id="{{ $customer->id }}">
        <option @if ($customer->status == 0) selected @endif value="0">Chưa liên hệ
        </option>
        <option @if ($customer->status == 1) selected @endif value="1">Đang liên hệ
        </option>
        <option @if ($customer->status == 2) selected @endif value="2">Đã xong
        </option>
    </select>
    @if (!empty($customer->done_date))
        <div style="text-align: center">{{ \Carbon\Carbon::parse($customer->done_date)->format('d/m/Y H:i') }}</div>
    @endif
</div>