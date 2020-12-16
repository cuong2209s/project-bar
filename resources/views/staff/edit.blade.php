@extends('layouts.home')
@section('title', 'Danh sách nhân viên')
@section('title1', 'Sửa thông tin nhân viên')
@section('content')
<div class="row">
    <div class="col-xl-6">
       <!--begin::Portlet-->
        <form id="form_edit_staff" >
            <div class="kt-portlet kt-portlet--tabs">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        Thêm nhân viên
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="col-lg-12 row">
                            <input type="hidden" value="{{ $data->id }}" name="id">
                            <div class="col-lg-6">
                                <label>Họ tên: </label>
                                <input name="name" value="{{ $data->name }}" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label>Tuổi: </label>
                                <input name="age" value="{{ $data->age }}" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label>Địa chỉ: </label>
                                <input name="address" value="{{ $data->address }}" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label>Số điện thoại: </label>
                                <input name="phone" type="text" value="0{{ $data->phone }}" class="form-control">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <label>Trạng thái: </label>
                                <select name="status" class="form-control">
                                    <option value=""> -- Chọn -- </option>
                                    @foreach (config('common.status') as $keyStatus => $nameStatus)
                                    <option @if ($data->status == $keyStatus)
                                        selected
                                    @endif value="{{ $keyStatus }}">{{ $nameStatus }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 kt-align-end">
                <button id="submit_edit_staff" type="button" class="btn btn-brand btn-elevate btn-elevate-air">Lưu</button>
            </div>
        </form>
       <!--end::Portlet-->
    </div>
 </div>
@endsection
@section('script')
    <script>
        var routeHome = "{{ route('staff.index') }}";
        var routeUpdateStaff = "{{ route('staff.update') }}";
    </script>
    <script src="{{asset('custom/assets/js/staff.js')}}" type="text/javascript"></script>
@endsection

