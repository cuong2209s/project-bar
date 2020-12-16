@extends('layouts.home')
@section('title', 'Quản lý nhân viên')
@section('title1', 'Danh sách nhân viên')
@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label row">
            <h3 class="kt-portlet__head-title">
                Danh sách nhân viên
            </h3>
        </div>
        <div class="col-lg-4 kt-align-right mt-3 mr-5">
            <a type="submit" href="{{ route('staff.create') }}" class="btn btn-outline-success btn-sm">Thêm nhân viên</a>
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
                            <th>Tên nhân viên</th>
                            <th>Tuổi</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th colspan="2" class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($data as $staff)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $staff->name }}</td>
                            <td>{{ $staff->age }}</td>
                            <td>{{ $staff->address }}</td>
                            <td>0{{ $staff->phone }}</td>
                            <td>
                                @if ($staff->status == 0)
                                    <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded">Đi làm</span>
                                @elseif($staff->status == 1)
                                    <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">Đã nghỉ</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <form action="{{ route('staff.edit',['id' => $staff->id]) }}">
                                    <button type="submit" class="btn btn-outline-info btn-sm" title="Sửa thông tin"><i class="fa fa-pencil-alt" style="margin-left: 5px; "></i></button>
                                </form>
                            </td>
                            <td class="text-center" >
                                <input type="hidden" value="{{ $staff->id }}" name="id">
                                <button type="button" onclick="destroyStaff({{$staff->id}})" class="btn btn-outline-danger btn-sm" title="Xóa"><i class="fa fa-trash-alt" style="margin-left: 5px; "></i></button>
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
    var routeHome = "{{ route('staff.index') }}";
    var routeDestroyStaff = "{{ route('staff.destroy') }}";
</script>
<script src="{{asset('custom/assets/js/staff.js')}}" type="text/javascript"></script>
@endsection
