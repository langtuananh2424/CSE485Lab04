@extends('App.app')

@section('content')
<div class="container">
    <h1>Danh sách sách</h1>

    <a href="{{ route('books.create') }}" class="btn btn-primary">Thêm sách mới</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sách</th>
                <th>Tác giả</th>
                <th>Thể loại</th>
                <th>Năm xuất bản</th>
                <th>Số lượng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->quantity }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$books -> links('pagination::bootstrap-4')}}  
@endsection
</div>    
