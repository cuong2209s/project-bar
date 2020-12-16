@extends('layouts.home')
@section('title', 'Danh sách danh mục')
@section('title1', 'Sửa danh mục')
@section('content')
<div class="row">
    <div class="col-xl-6">
       <!--begin::Portlet-->
        <form id="form_edit_category">
            <div class="kt-portlet kt-portlet--tabs">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        Sửa danh mục
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="col-lg-12 row">
                            <input type="hidden" value="{{ $data->id }}" name="id">
                            <div class="col-lg-6">
                                <label>Tên danh mục: </label>
                                <input name="name" value="{{ $data->name }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 kt-align-end">
                <button id="submit_edit_category" type="button" class="btn btn-brand btn-elevate btn-elevate-air">Lưu</button>
            </div>
        </form>
       <!--end::Portlet-->
    </div>
 </div>
@endsection
@section('script')
    <script>
        var routeHome = "{{ route('category-drink.index') }}";
        var routeUpdateCategory = "{{ route('category-drink.update') }}";
    </script>
    <script src="{{asset('custom/assets/js/category-drink.js')}}" type="text/javascript"></script>
@endsection

