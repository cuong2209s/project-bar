@extends('layouts.home')
@section('title', 'Quản lý danh mục')
@section('title1', 'Danh sách danh mục')
@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label row">
            <h3 class="kt-portlet__head-title">
                Danh sách danh mục
            </h3>
        </div>
        <div class="col-lg-4 kt-align-right mt-3 mr-5">
            <a type="submit" href="{{ route('category-drink.create') }}" class="btn btn-outline-success btn-sm">Thêm danh mục</a>
        </div>
    </div>
    <div class="kt-portlet__body">
        <!--begin::Section-->
        <div class="kt-section">
            <div class="kt-section__content">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th colspan="2" class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($data as $category)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $category->name }}</td>
                            <td class="text-center">
                                <form action="{{ route('category-drink.edit',['id' => $category->id]) }}">
                                    <button type="submit" class="btn btn-outline-info btn-sm" title="Sửa thông tin"><i class="fa fa-pencil-alt" style="margin-left: 5px; "></i></button>
                                </form>
                            </td>
                            <td class="text-center" >
                                <input type="hidden" value="{{ $category->id }}" name="id">
                                <button type="button" onclick="destroyCategory({{ $category->id }})" class="btn btn-outline-danger btn-sm" title="Xóa"><i class="fa fa-trash-alt" style="margin-left: 5px; "></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!--end::Section-->
    </div>
</div>
@endsection
@section('script')
<script>
    var routeHome = "{{ route('category-drink.index') }}";
    var routeDestroyCategory = "{{ route('category-drink.destroy') }}";
</script>
<script src="{{asset('custom/assets/js/category-drink.js')}}" type="text/javascript"></script>
@endsection
