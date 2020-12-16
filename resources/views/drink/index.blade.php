@extends('layouts.home')
@section('title', 'Quản lý nước')
@section('title1', 'Danh sách nước')
@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label row">
            <h3 class="kt-portlet__head-title">
                Danh sách nước
            </h3>
        </div>
        <div class="col-lg-4 kt-align-right mt-3 mr-5">
            <a type="submit" href="{{ route('drink.create') }}" class="btn btn-outline-success btn-sm">Thêm nước</a>
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
                            <th>Tên nước</th>
                            <th>Danh mục</th>
                            <th>Số lượng</th>
                            <th>Ngày hết hạn</th>
                            <th colspan="2" class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($data as $drink)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $drink->name }}</td>
                            <td>{{ $drink->name_cate }}</td>
                            <td>{{ $drink->quantity}}</td>
                            <td>{{ \Carbon\Carbon::parse($drink->expiry_date)->format('d-m-Y') }}</td>
                            <td class="text-center">
                                <form action="{{ route('drink.edit',['id' => $drink->id]) }}">
                                    <button type="submit" class="btn btn-outline-info btn-sm" title="Sửa thông tin"><i class="fa fa-pencil-alt" style="margin-left: 5px; "></i></button>
                                </form>
                            </td>
                            <td class="text-center" >
                                <input type="hidden" value="{{ $drink->id }}" name="id">
                                <button type="button" onclick="destroyDrink({{$drink->id}})" class="btn btn-outline-danger btn-sm" title="Xóa"><i class="fa fa-trash-alt" style="margin-left: 5px; "></i></button>
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
    var routeHome = "{{ route('drink.index') }}";
    var routeDestroyDrink = "{{ route('drink.destroy') }}";
</script>
<script src="{{asset('custom/assets/js/drink.js')}}" type="text/javascript"></script>
@endsection
