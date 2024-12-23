
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
                            @endforeach
    {{$borrows -> links('pagination::bootstrap-4')}}  
    
@endsection
