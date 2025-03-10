
@section('content')
<div class="content-page">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item"><a href="#">Purchase</a></li>
                        <li class="breadcrumb-item active">Edit Purchase</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Purchase</h4>
            </div>
        </div>
    </div>
    
    <form style="margin: 0 auto; width:300px; font-size: 14px" action="{{ route('purchase.update', $purchase->id) }}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
            <legend>Thông tin hóa đơn</legend>
            Họ tên
            <input style="margin-bottom:7px;" class="form-control" type="text" name="name" value="{{ $purchase->name }}" />
            <input type="hidden" name="id" value="{{ $purchase->id }}" />
        </fieldset>
        <fieldset>
            Email
            <input style="margin-bottom:7px;" class="form-control" type="email" name="email" value="{{ $purchase->email }}" />
        </fieldset>
        <fieldset>
            Địa chỉ
            <input style="margin-bottom:7px;" class="form-control" type="text" name="delivery_address" value="{{ $purchase->delivery_address }}" />
        </fieldset>
        <fieldset>
            Số điện thoại
            <input style="margin-bottom:7px;" class="form-control" type="text" name="phone_number" value="{{ $purchase->phone_number }}" />
        </fieldset>
        <fieldset>
            Ngày tạo
            <input style="margin-bottom:7px;" class="form-control" type="text" name="created_at" value="{{ $purchase->created_at }}" disabled />
        </fieldset>
        <fieldset>
            Tổng hóa đơn
            <input style="margin-bottom:7px;" class="form-control" type="text" name="total" value="{{ $purchase->total }}" />
        </fieldset>
        <fieldset>
            Tình trạng
            <select style="margin-bottom: 7px; width: 300px; height: 36px; border-radius: 4px; background: #58616e; color: white" name="purchase_state_id">
                @foreach($purchaseStates as $state)
                    <option value="{{ $state->id }}" {{ $purchase->purchase_state_id == $state->id ? 'selected' : '' }}>{{ $state->value }}</option>
                @endforeach
            </select>
        </fieldset>
        <fieldset style="padding-top: 15px; text-align: center">
            <button class="btn btn-danger" style="margin-right: 10px; width: 70px; height: 35px" type="submit">Edit</button>
            <button class="btn btn-danger" style="width: 70px; height: 35px" type="button" onclick="location.href='{{ route('purchase.index') }}'">Cancel</button>
        </fieldset>
    </form>
</div>
@endsection