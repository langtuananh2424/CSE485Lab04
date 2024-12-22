@extends('layouts.App')
@section('content')
    <form method="POST" action="{{route('readers.update', $reader->id)}}" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="readername" class="form-label">Tên Đọc Giả</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$reader->name}}">
        </div>
        <div class="mb-3">
            <label for="readerbirthday" class="form-label">Ngày Sinh</label>
            <input type="date" name="birthday" id="birthday" class="form-control" value="{{$reader->birthday}}">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Địa Chỉ</label>
            <input type="text" name="address" id="address" class="form-control" value="{{$reader->address}}">
        </div>
        <div class="mb-3">
            <label for="readerphone" class="form-label">Số Điện Thoại</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{$reader->phone}}">
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật Đọc Giả</button>
    </form>
@endsection
