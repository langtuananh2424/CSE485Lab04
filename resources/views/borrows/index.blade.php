<<<<<<< HEAD
@extends('App.app')

@section('content')
    <h1>Danh sách lượt mượn</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Độc giả</th>
                <th>Sách</th>
                <th>Ngày mượn</th>
                <th>Ngày trả (dự kiến)</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->id }}</td>
                    <td>{{ $borrow->reader->name }}</td>
                    <td>{{ $borrow->book->name }}</td>
                    <td>{{ $borrow->borrowed_at }}</td>
                    <td>{{ $borrow->returned_at }}</td>
                    <td>{{ $borrow->status ? 'Đã trả' : 'Đang mượn' }}</td>
                    <td>
                        <form action="{{ route('borrows.update', $borrow->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Trả sách</button>
=======
@extends('layouts.App')
@section('content')
    <div class="container">
        <h1>Danh sách Mượn</h1>
        <a href="{{route('borrows.create')}}" class="btn btn-primary">Add Borrow</a>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Book Id</th>
                <th>Reader Id</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($borrows as $borrow)
                <tr>
                    <td>{{$borrow->id}}</td>
                    <td>{{$borrow->book_id}}</td>
                    <td>{{$borrow->reader_id}}</td>
                    <td>{{$borrow->borrow_date}}</td>
                    <td>{{$borrow->return_date}}</td>
                    <td>{{$borrow->status ? "Đã trả" : "Chưa trả"}}</td>
                    <td><a href="{{route('borrows.show', $borrow->id)}}" class="btn btn-info">Xem</a></td>
                    <td><a href="{{route('borrows.edit', $borrow->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('borrows.destroy', $borrow->id)}}" method="POST" style="display: inline-block;">
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
    {{$borrows -> links('pagination::bootstrap-4')}}  
@endsection
=======
            </tbody>
        </table>
        {{ $borrows->links('pagination::bootstrap-4') }}  <p>Showing page {{ $borrows->currentPage() }} of {{ $borrows->lastPage() }}</p>  </div>
@endsection
>>>>>>> origin/main
