@extends('layouts.home')
@section('title', 'Danh sách nước')
@section('title1', 'Thêm nước')
@section('content')
<div class="row">
    <div class="col-xl-6">
       <!--begin::Portlet-->
        <form id="form_add_drink" method="POST">
            <div class="kt-portlet kt-portlet--tabs">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        Thêm nước
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="col-lg-12 row">
                            <div class="col-lg-6">
                                <label>Tên nước: </label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label>Danh mục: </label>
                                <select name="category_id" class="form-control">
                                    <option value="">  -- Chọn danh mục --</option>
                                    @foreach ($data as $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label>Số lượng: </label>
                                <input name="quantity" type="number"" class="form-control">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label>Ngày hết hạn: </label>
                                <input name="expiry_date" type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 kt-align-end">
                <button id="submit_add_drink" type="button" class="btn btn-brand btn-elevate btn-elevate-air">Lưu</button>
            </div>
        </form>
       <!--end::Portlet-->
    </div>
 </div>
@endsection
@section('script')
    <script>
        var routeHome = "{{ route('drink.index') }}";
        var routePostDrink = "{{ route('drink.store') }}";
    </script>
    <script src="{{asset('custom/assets/js/drink.js')}}" type="text/javascript"></script>
@endsection

