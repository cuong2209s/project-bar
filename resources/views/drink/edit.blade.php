@extends('layouts.home')
@section('title', 'Danh sách nước')
@section('title1', 'Sửa')
@section('content')
<div class="row">
    <div class="col-xl-6">
       <!--begin::Portlet-->
        <form id="form_edit_drink" method="POST">
            <div class="kt-portlet kt-portlet--tabs">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        Sửa
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="col-lg-12 row">
                            <input type="hidden" value="{{ $data->id }}" name="id">
                            <div class="col-lg-6">
                                <label>Tên nước: </label>
                                <input name="name" value="{{ $data->name }}" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label>Danh mục: </label>
                                <select name="category_id" class="form-control">
                                    <option value="">  -- Chọn danh mục --</option>
                                    @foreach ($cates as $cate)
                                    <option @if ( $data->cate_id  == $cate->id)
                                        selected
                                    @endif value="{{ $cate->id }}"> {{ $cate->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label>Số lượng: </label>
                                <input name="quantity" value="{{ $data->quantity }}" type="number"" class="form-control">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label>Ngày hết hạn: </label>
                                <input name="expiry_date" value="{{ $data->expiry_date}}" type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 kt-align-end">
                <button id="submit_edit_drink" type="button" class="btn btn-brand btn-elevate btn-elevate-air">Lưu</button>
            </div>
        </form>
       <!--end::Portlet-->
    </div>
 </div>
@endsection
@section('script')
    <script>
        var routeHome = "{{ route('drink.index') }}";
        var routeUpdateDrink = "{{ route('drink.update') }}";
    </script>
    <script src="{{asset('custom/assets/js/drink.js')}}" type="text/javascript"></script>
@endsection

