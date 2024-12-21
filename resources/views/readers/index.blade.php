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
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$readers -> links('pagination::bootstrap-4')}}  
@endsection