<<<<<<< HEAD
@extends('App.app')

@section('content')
    <h1>Danh sách độc giả</h1>

    <a href="{{ route('readers.create') }}" class="btn btn-primary">Thêm độc giả mới</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readers as $reader)
                <tr>
                    <td>{{ $reader->id }}</td>
                    <td>{{ $reader->name }}</td>
                    <td>{{ $reader->birthday }}</td>
                    <td>{{ $reader->address }}</td>
                    <td>{{ $reader->phone }}</td>
                    <td>
                        <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('readers.destroy', $reader->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
=======
@extends('layouts.App')
@section('content')
    <div class="container">
        <h1>Danh sách Đọc Giả</h1>
        <a href="{{route('readers.create')}}" class="btn btn-primary">Add Reader</a>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($readers as $reader)
                <tr>
                    <td>{{$reader->id}}</td>
                    <td>{{$reader->name}}</td>
                    <td>{{$reader->birthday}}</td>
                    <td>{{$reader->address}}</td>
                    <td>{{$reader->phone}}</td>
                    <td><a href="{{route('readers.show', $reader->id)}}" class="btn btn-info">Xem</a></td>
                    <td><a href="{{route('readers.edit', $reader->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('borrows.destroy', $reader->id)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá ?')">Xoá</button>
>>>>>>> origin/main
                        </form>
                    </td>
                </tr>
            @endforeach
<<<<<<< HEAD
        </tbody>
    </table>
    {{$readers -> links('pagination::bootstrap-4')}}  
@endsection
=======
            </tbody>
        </table>
        {{ $readers->links('pagination::bootstrap-4') }}  <p>Showing page {{ $readers->currentPage() }} of {{ $readers->lastPage() }}</p>  </div>
@endsection
>>>>>>> origin/main
