@extends('layouts.App')
@section('content')
    <form method="POST" action="{{route('readers.store')}}" class="container">
        @csrf
        <div class="mb-3">
            <label for="readername" class="form-label">Tên Đọc Giả</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="readerbirthday" class="form-label">Ngày Sinh</label>
            <input type="date" name="birthday" id="birthday" class="form-control">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Địa Chỉ</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="mb-3">
            <label for="readerphone" class="form-label">Số Điện Thoại</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Thêm Đọc Giả</button>
    </form>
@endsection
