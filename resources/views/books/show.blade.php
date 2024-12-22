@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chi tiết Sách</h1>
        <p><strong>Tên Sách:</strong> {{ $book->name }}</p>
        <p><strong>Tác Giả:</strong> {{ $book->author }}</p>
        <p><strong>Thể Loại:</strong> {{ $book->category }}</p>
        <p><strong>Năm Xuất Bản:</strong> {{ $book->year }}</p>
        <p><strong>Chất Lượng</strong> {{ $book->quantity }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>

    <div class="container">
        @if ($borrows->count() > 0)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Người Mượn</th>
                    <th>Ngày Mượn</th>
                    <th>Ngày Trả</th>
                    <th>Trạng Thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach($borrows as $borrow)
                    <tr>
                        <td>{{ $borrow->reader->name}}</td>
                        <td>{{ $borrow->borrow_date}}</td>
                        <td>{{ $borrow->return_date}}</td>
                        <td>{{ $borrow->status ? "Đã trả" : "Chưa trả" }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Chưa có ai mượn cuốn sách này.</p>
        @endif
    </div>
@endsection
