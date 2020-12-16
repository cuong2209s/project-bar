@extends('layouts.home')
@section('title', 'Danh sách danh mục')
@section('title1', 'Thêm danh mục')
@section('content')
<div class="row">
    <div class="col-xl-6">
       <!--begin::Portlet-->
        <form id="form_add_category">
            <div class="kt-portlet kt-portlet--tabs">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        Thêm danh mục
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="col-lg-12 row">
                            <div class="col-lg-6">
                                <label>Tên danh mục: </label>
                                <input name="name" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 kt-align-end">
                <button id="submit_add_category" type="button" class="btn btn-brand btn-elevate btn-elevate-air">Lưu</button>
            </div>
        </form>
       <!--end::Portlet-->
    </div>
 </div>
@endsection
@section('script')
    <script>
        var routeHome = "{{ route('category-drink.index') }}";
        var routePostCategory = "{{ route('category-drink.store') }}";
    </script>
    <script src="{{asset('custom/assets/js/category-drink.js')}}" type="text/javascript"></script>
@endsection

